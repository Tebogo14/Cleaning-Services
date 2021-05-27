<?php

require 'models/connect.php';

class SingleInvoice {
    public $inv_no;
	public $inv_date;
    public $cust_id;
	public $cust_name;
	public $cust_surname;
    public $cust_contact_nr;
	public $cust_email;
    public $loc_streetname;
	public $loc_address;
	public $loc_city;
    public $loc_suburb;
	public $loc_province;
    public $srv_size;
    public $srv_amount;
    public $srv_id;
    public $service_type;
    public $service_price;
    public $vat;
    public $total_amount;

	
	public function __construct($inv_no,
    $inv_date,
     $cust_id,
	 $cust_name,
	 $cust_surname,
     $cust_contact_nr,
	 $cust_email,
     $loc_streetname,
	 $loc_address,
	 $loc_city,
     $loc_suburb,
	 $loc_province,
     $srv_size,
     $srv_amount,
     $srv_id,
     $service_type,
     $service_price,
     $vat,
     $total_amount) {	
	 $this -> inv_no = $inv_no;
	 $this -> inv_date = $inv_date;
	 $this -> cust_name =$cust_name;
	 $this -> cust_id =$cust_id;
	 $this -> cust_surname = $cust_surname;
     $this -> cust_contact_nr = $cust_contact_nr;
	 $this -> cust_email = $cust_email;
     $this -> loc_streetname = $loc_streetname;
	 $this -> loc_address = $loc_address;
	 $this -> loc_city = $loc_city;
     $this -> loc_suburb = $loc_suburb;
	 $this -> loc_province = $loc_province;
	 $this -> srv_size = $srv_size;
	 $this -> srv_amount = $srv_amount;
	 $this -> srv_id = $srv_id;
     $this -> service_type = $service_type;
     $this -> service_price = $service_price;
     $this -> vat = $vat;
     $this -> total_amount = $total_amount;
	}

	public static function getInvoiceList () {

	$db = Db::getInstance();
	$invoice = array();
    $invoice_id = $_GET['InvoiceNo'];
	
	$query = "SELECT inv_date,C.cust_id as cust_id, cust_name, cust_surname, cust_contact_nr, cust_email,`loc_streetname`,`loc_address`,`loc_city`, `loc_suburb`,Name,`custService_size`,`custService_amount`,S.service_id as service_id,`service_type`,`service_price`";
    $query.= " FROM `invoice` I , customer C , location L ,  customerservice CS , service S , province P";
    $query.= " Where I.cust_id = C.cust_id";
    $query.= " AND C.cust_Id = CS.cust_Id";
    $query.= " AND CS.service_id = S.service_id";
    $query.= " AND CS.Invoice_no = I.invoice_No";
    $query.= " AND CS.Location_Id = L.LocationID";
    $query.= " AND C.cust_id = L.cust_id";
    $query.= " AND P.province_id = L.loc_province";
    $query.= " AND I.invoice_No = $invoice_id";
	
	$req = $db->query($query);

	foreach ($req->fetchAll() as $invoices) {

		$custlist[] = new SingleInvoice($invoice_id,$invoices['inv_date'],$invoices['cust_id'],$invoices['cust_name'],$invoices['cust_surname'],$invoices['cust_contact_nr'],$invoices['cust_email'],$invoices['loc_streetname'],$invoices['loc_address'],$invoices['loc_city'],$invoices['loc_suburb'],$invoices['Name'],$invoices['custService_size'],$invoices['custService_amount'],$invoices['service_id'],$invoices['service_type'],$invoices['service_price'],$invoices['custService_amount']*0.15,$invoices['custService_amount']);
	}

	return $custlist[0];
	}

    public static function payInvoice()
    {
        $db = Db::getInstance();
        $username = $_SESSION['username'];
        $sysdate = date("Y/m/d");
        $InvoiceNo = $_GET['InvoiceNo'];
        $payment = "INSERT INTO `payment`(`payment_date`,`payment_status`, `cust_id`) VALUES ('$sysdate','Paid',(SELECT cust_id FROM `customer` WHERE cust_username = '$username'))"; 
    
        $req = $db->query($payment);

        if($req)
        {
            $sql ="Update `Invoice`";
            $sql .="SET `payment_id` = (Select MAX(`payment_id`) From `payment` Where `cust_id` = (SELECT `cust_id` FROM `customer` WHERE cust_username = '$username'))";
            $sql .="Where `invoice_no` = '$InvoiceNo'";

            $db->query($sql);
        }

    }


}  