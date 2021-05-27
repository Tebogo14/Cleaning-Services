<?php
require 'models/connect.php';

class User {
    
    public $username;
    public $role;
	public $firstName;
	public $lastName;
	public $contact;
	public $Email;

    	public function __construct($username, $role) {
		
      		$this->username  = $username;
      		$this->role  = $role;
    	}

    	public static function login($username,$password) {

	      	$list = array();
      		$db = Db::getInstance();
	  		$sql = "SELECT `cust_username`, `Role` FROM customer WHERE `cust_username` = '$username' AND `cust_password` ='$password'";
		
	  		$req = $db->query($sql);
			$i=0;
      		
         	foreach ($req->fetchAll() as $user) {
        		$list[] = new User($user['cust_username'], $user['Role']);

				print_r($list);
			$i++;
        	}
        	if ($i>0)
			{
			print_r($list[0]);
			return $list[0];
			} 
	  	else
		  {
			return false;
		  }
    	}

		public static function Register($firstName,$lastName,$contact,$Email,$username,$password){
			$db = Db::getInstance();
			$sql = "INSERT INTO `customer`(`cust_name`, `cust_surname`, `cust_email`, `cust_username`, `cust_password`, `cust_contact_nr` ,`Role`) VALUES ('$firstName','$lastName','$Email','$username','$password','$contact','customer')";
			$req = $db->query($sql);
			
			if($req)
			{
				return User::login($username,$password);
			}

		}

}  

?>