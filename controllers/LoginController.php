<?php

require 'models/user.php';


class LoginController{
    public function mvcHandler() 
    {
        $act = isset($_GET['act']) ? $_GET['act'] : NULL;

        switch ($act) 
        {
            case 'login' :                    
                $this->Login();
                break;											
            default:
                $this->list();
        }
    }

    public function Login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $_SESSION['username'] = User::Find($username,$password)->username;
        $_SESSION['role'] = User::Find($username,$password)->role;
 
         header('Location:home');
        
    }

    public function list()
    {
        session_destroy();
        unset($_SESSION['username']);
    }


}

?>