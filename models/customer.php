<?php

require 'models/connect.php';

class Customer{
	public $cust_id;
	public $name;
	public $surname;
	public $username;
	public $password;
    public $contact;
	
public function __construct($cust_id, $name, $surname, $username, $password, $contact) {
	$this->cust_id  = $cust_id;
	$this->name  = $name;
	$this->surname  = $surname;
	$this->username  = $username;
	$this->password  = $password;
    $this->contact = $contact;
}

public static function getCustomerId($username) {
	$db = Db:: getInstance();
	$qry = "SELECT cust_id FROM customer WHERE username = '$username'";
	$req = $db->query($qry);
	$cust_id ='';
	
	$cust_id = $req->fetchColumn();
	
	return $cust_id;
}

public static function addBookingServices($username, $service_id, $date, $time, $size, $amount) {	
	$db = Db:: getInstance();
	$qry = "INSERT INTO customerService (cust_id, service_id, custService_date,custService_time ,custService_size, custService_amount) ";
	$qry.= "VALUES ((SELECT cust_id FROM customer WHERE cust_username = '$username'), '$service_id', '$date', '$time', '$size', '$amount') ";
	 try {
		 $db->query ($qry); 
		$_SESSION['MESSAGE'] = "Request captured";
	 }
	catch (PDOException $e) 
	{
		$_SESSION['MESSAGE'] = "Request could not be captured";
	}
}

public static function getAmount($size, $service_id)
{
 $db = Db:: getInstance();
 $qry = "SELECT service__id, service_size FROM service";
 $qry->query($qry);	
 return total_amount;	
}


public static function updateProfile($cust_id, $name, $surname,$contact) {	
	$db = Db:: getInstance();
	$qry = "UPDATE customer SET cust_name = '$name', ";
	$qry.= " cust_surname = '$surname' ";
	$qry.= " cust_contact_nr = '$contact'  WHERE cust_id = '$cust_id'";
	 try {
		$db->query ($qry); 
		$_SESSION['MESSAGE'] = "Profile updated";
	 }
	catch (PDOException $e) 
	{
		$_SESSION['MESSAGE'] = "Profile could not be updated";
	}
}

  public static function getLocationList($locationID,$streetName,$address, $houseNo, $city, $suburb, $province)
    {
    $db = Db:: getInstance();
	$locationList = array();
        
    $loc_query = "SELECT `loc_streetname`, `loc_address`, `loc_city`, `loc_suburb`, `loc_province` FROM `location` WHERE (SELECT cust_id FROM `customer` WHERE cust_username = '$username')";
    $loc_result = mysqli_query($conn,$loc_query);
    $loc_row = mysqli_fetch_array($loc_result);
    $loc_streetname = $loc_row['loc_streetname'];
    $loc_address = $loc_row['loc_address'];
    $loc_city = $loc_row['loc_city'];
    $loc_suburb = $loc_row['loc_suburb'];
    $loc_province = $loc_row['loc_province'];		

        
        
       return $locationList;    
        
    }


  public static function getInfo ($username) {
	
	$db = Db:: getInstance();
    $custlist = array();
	
	$sql = "SELECT cust_id, cust_name, cust_surname, cust_username, cust_password, cust_contact_nr ";
	$sql.= "FROM customer ";
	$sql = $sql." WHERE cust_username = '$username'";   
	
	$req1 = $db->query($sql);
	foreach ($req1->fetchAll() as $customer) {
    $custlist = new Customer($customer['cust_id'],$customer['cust_name'], $customer['cust_surname'], $customer['cust_username'], $customer['cust_password'], $customer['cust_contact_nr']);

	}
	return $custlist;
	}
}     //close Customer class

class	Service {
	public $serv_id;
	public $serv_desc;
	public $serv_price;
	
public function __construct($service_id, $service_desc, $price) {	
     $serv_id = $service_id;
	 $serv_desc = $service_desc;
	 $serv_price = $price;
}

public static function getServiceList () {
		//this must return a list of service objects to be used in dropdown for services
		//Do you have a service class?
	$db = Db:: getInstance();
	$list = array();
	
    $service_query = "SELECT `service_id`,`service_type`,`service_price`,`service_desc` FROM `service` WHERE service_id = '$service_id'";
    $service_result = mysqli_query($conn,$service_query);
    $service_row = mysqli_fetch_array($service_result);
    $service_id = $service_row['service_id'];
	$service_type = $service_row['service_type'];
    $service_price = $service_row['service_price'];
    $service_desc = $service_row['service_desc'];    

    $vat = $service_price * 0.15;
    $amount = $vat + $service_price;
	
    $req = $db->query($service_query);
	foreach ($req1->fetchAll() as $Service) {
    $custlist = new Service($Service['service_id'],$service['service_desc'], $Service['service_price']);

	}
            
	return $list;
	}
}   //end of class

