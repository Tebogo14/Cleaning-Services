<?php
require 'models/connect.php';

class User {
    
    public $username;
    public $role;
	public $firstName;
	public $lastName;
	public $contact;
	public $Email;

    	public function __construct($username, $role ,$firstname,$lastName,$contact,$Email) {
		
      		$this->username  = $username;
      		$this->role  = $role;
			$this->firstname  = $firstname;
      		$this->lastName  = $lastName;
			$this->contact  = $contact;
      		$this->Email  = $Email;
    	}

    	public static function login($username,$password) {

	      	$list = array();
      		$db = Db::getInstance();
	  		$sql = "SELECT `cust_username`, `Role` FROM customer WHERE `cust_username` = '$username' AND `cust_password` ='$password'";
		
	  		$req = $db->query($sql);
			$i=0;
      		
         	foreach ($req->fetchAll() as $user) {
        		$list[] = new User($user['cust_username'], $user['Role'] , "" , "", "", "" );
			$i++;
        	}
        	if ($i>0)
			{
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

		public static function GetUsers()
		{
			$list = array();
			$db = Db::getInstance();
			$sql = "SELECT * FROM customer WHERE `role` = 'customer'";
	  
			$req = $db->query($sql);

			foreach ($req->fetchAll() as $user) {
        		$list[] = new User($user['cust_username'], $user['Role'] , $user['cust_name'] , $user['cust_surname'], $user['cust_contact_nr'], $user['cust_email'] );
        	}

			print_r($list);

			return $list;
		}

		public static function Delete($username)
		{
			$db = Db::getInstance();
			$sql = "DELETE FROM `customer` WHERE cust_username = '$username'";
			$req = $db->query($sql);
		}


}  

?>