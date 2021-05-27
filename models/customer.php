<?php

class Customer{
	public $invoice_no;
	public $service_type;
	public $custService_amount;

	
	public function __construct($invoice_no, $service_type, $custService_amount) {
		$this->invoice_no  = $invoice_no;
		$this->service_type  = $service_type;
		$this->custService_amount  = $custService_amount;

	}

	public static function addBookingServices($service_id, $date, $size,$streetName,$postalAddress,$city,$suburb,$province) {	
		$db = Db:: getInstance();
		$username = $_SESSION['username'];

		$invoice_no = Customer::insertInvoice();
		$custService_amount = Customer::GetServicePrice($service_id) * $size;

		$location = Customer::addLocation($streetName,$postalAddress,$city,$suburb,$province);

		$qry = "INSERT INTO `customerservice`(`custService_date`,`custService_size`,`custService_amount`,`cust_id`, `service_id`,`invoice_no`,`Location_id`) ";
		$qry.= "VALUES ('$date','$size','$custService_amount',(SELECT cust_id FROM `customer` WHERE cust_username = '$username'),'$service_id','$invoice_no','$location') ";
		try {
			$db->query ($qry); 
			$_SESSION['MESSAGE'] = "Request captured";
		}
		catch (PDOException $e) 
		{
			$_SESSION['MESSAGE'] = "Request could not be captured";
		} 
	}


	public static function GetInvoice()
	{
		$db = Db:: getInstance();

		$serv_sql = "SELECT `custService_amount`,`invoice_no` , `service_type` FROM `customerservice` c JOIN service s on s.service_id = c.service_id Where `custService_id` = (Select MAX(`custService_id`) From `customerservice` Where `cust_id` = (SELECT cust_id FROM `customer` WHERE cust_username = '".$_SESSION['username']."'))";
		$results = $db->query ($serv_sql);

		foreach ($results->fetchAll() as $invoice) {
			$invoices = new Customer($invoice['invoice_no'],$invoice['service_type'],$invoice['custService_amount']);
		}

		return $invoices;
	}

	public static function GetServicePrice($service_id)
	{
		$db = Db:: getInstance();
		$sql = "SELECT `service_price` FROM `service` WHERE service_id = '$service_id'";
		$results = $db->query ($sql);

		foreach ($results->fetchAll() as $price) {
			$price = $price['service_price'];
		}

		return $price;
	}


	public static function addLocation($streetName,$postalAddress,$city,$suburb,$province)
	{
		$db = Db:: getInstance();
		$username = $_SESSION['username'];
		$sql = "INSERT INTO `location`(`cust_id`, `loc_streetname`, `loc_address`, `loc_city`, `loc_suburb`, `loc_province`) VALUES ((SELECT cust_id FROM `customer` WHERE cust_username = '$username'), '$streetName','$postalAddress','$city','$suburb','$province')";
		$db->query ($sql);

		$location = "Select MAX(LocationID) as LocationID FROM location";
		$results = $db->query ($location);

		foreach ($results->fetchAll() as $locations) {
			$Loc = $locations['LocationID'];
		}
		return $Loc;
	}

	public static function insertInvoice()
	{
		$db = Db:: getInstance();
		$username = $_SESSION['username'];

		$sysdate = date("Y/m/d");
		$invoice_sql = "INSERT INTO `invoice`(`inv_date`, `cust_id`) VALUES ('$sysdate',(SELECT cust_id FROM `customer` WHERE cust_username = '$username'))"; 
		$result = $db->query ($invoice_sql);

		if($result)
		{
			$inv_query = "SELECT `invoice_no` FROM `invoice` ORDER BY invoice_no DESC LIMIT 1";
			$results = $db->query ($inv_query);	

			foreach ($results->fetchAll() as $invoice) {
				$invoice_no = $invoice['invoice_no'];
			}
		}
		else{
			$invoice_no = 0;
		}

		return $invoice_no;
	}
}  

?>

