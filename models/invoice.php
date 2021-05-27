<?php

require 'models/connect.php';

class Invoice{
	public $service_type;
	public $custService_date;
	public $invoice_no;
	public $custService_amount;

	public function __construct($service_type, $custService_date,$invoice_no,$custService_amount) {	
		$this -> service_type = $service_type;
		$this -> custService_date = $custService_date;
        $this -> invoice_no = $invoice_no;
		$this -> custService_amount = $custService_amount;
	}

	
	public static function getInvoice() {

		$db = Db::getInstance();
		$invoices = array();

        $username = $_SESSION['username'];

        $id_query = "SELECT cust_id FROM `customer` WHERE cust_username = '$username'";
		
        $req = $db->query($id_query);

        //$cust_id = 0;

        foreach ($req->fetchAll() as $id) {
			$cust_id = $id['cust_id'];
		}

		$query = "SELECT s.service_type, c.custService_date, c.invoice_no , c.custService_amount FROM service AS s, customerservice AS c WHERE s.service_id = c.service_id AND c.cust_id = '$cust_id'";
		
		$results = $db->query($query);
	
		foreach ($results->fetchAll() as $invoice) {
	
			$invoices[] = new Invoice($invoice['service_type'],$invoice['custService_date'],$invoice['invoice_no'],$invoice['custService_amount']);
		}

		return $invoices;
	}

	public static function delete()
	{	$db = Db::getInstance();
		$inv_no = $_POST['delete'];

		$qry = "DELETE FROM `customerservice` WHERE `invoice_no` = $inv_no";
		$db->query($qry);
	}

}

?>