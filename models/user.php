<?php
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
	  	$sql = "SELECT username, Role FROM customer, WHERE username = '$username' AND user_password='$password'";
		
	  	$req = $db->query($sql);
		$i=0;
      		
         	foreach ($req->fetchAll() as $user) {
        		$list[] = new User($user['username'], $user['role']);
			$i++;
        	}
        	if ($i>0)
			return $list[0];  
	  	else
			return false;
    	}
}  

?>