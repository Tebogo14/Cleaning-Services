<?php
require 'models/connect.php';

class User {
    
    public $username;
    public $role;
   
    	public function __construct($username, $role) {
		
      		$this->username  = $username;
      		$this->role  = $role;
    	}

    	public static function find($username,$password) {

	      	$list = array();
      		$db = Db::getInstance();
	  		$sql = "SELECT `cust_username`, `Role` FROM customer WHERE `cust_username` = '$username' AND `cust_password` ='$password'";
		
	  		$req = $db->query($sql);
			$i=0;
      		
         	foreach ($req->fetchAll() as $user) {
        		$list[] = new User($user['cust_username'], $user['Role']);
			$i++;
        	}
        	if ($i>0)
			return $list[0];  
	  	else
			return false;
    	}
}  

?>