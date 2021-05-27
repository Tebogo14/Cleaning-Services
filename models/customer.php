<?php

//require 'models/connect.php';

class Service {
	public $id;
	public $type;
	public $price;

	
	public function __construct($id, $type, $price) {	
		$this -> id = $id;
		$this -> type = $type;
		$this -> price = $price;
	}

	public static function getServiceList () {

	$db = Db::getInstance();
	$custlist = array();
	
	$query = "SELECT * FROM `service`";
	
	$req = $db->query($query);

	foreach ($req->fetchAll() as $service) {

		$custlist[] = new Service($service['service_id'],$service['service_type'],$service['service_price']);
	}
	return $custlist;
	}

}   

