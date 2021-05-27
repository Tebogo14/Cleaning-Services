<?php

require 'models/connect.php';

class Province{
	public $proviceName;
	public $proviceId;

	public function __construct($id, $name) {	
		$this -> proviceId = $id;
		$this -> proviceName = $name;
	}

	
	public static function getProvices() {

		$db = Db::getInstance();
		$custlist = array();
		
		$query = "SELECT * FROM `province`";
		
		$req = $db->query($query);
	
		foreach ($req->fetchAll() as $provinces) {
	
			$province[] = new Province($provinces['province_id'],$provinces['Name']);
		}
		return $province;
		}

}

?>