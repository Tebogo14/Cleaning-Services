<?php

  class Service {
      
    public $service_id;
	public $service_type;
	public $service_price;
	public $service_desc;
   
    	public function __construct($service_id, $service_type, $service_price, $service_desc) {
      		$this->service      = $service_id;
      		$this->serviceType  = $service_type;
			$this->service_price = $service_price;
			$this->service_desc = $service_desc;
			
    	}

	public function getServiceList() {
      		$serviceList = array();
      		$db = Db::getInstance();
      		$req = $db->query('SELECT * FROM services');
     
      		foreach($req->fetchAll() as $service) {
        		$serviceList[] = new Service($service['service_id'], $service['service_type'], $service['service_price'], $service['service_desc']);
      		}

      	return $serviceList;
    	}
      
     


}

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
}   
?>