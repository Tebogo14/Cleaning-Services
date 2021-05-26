<?php

require 'models/user.php';


class RegisterController{
    public function mvcHandler() 
    {
        $act = isset($_GET['act']) ? $_GET['act'] : NULL;

        switch ($act) 
        {
            case 'register' :                    
                $this->Register();
                break;											
            default:
                $this->list();
        }
    }

    public function Register()
    {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $contact = $_POST['contact'];
        $Email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];


        $_SESSION['username'] = User::Register($firstName,$lastName,$contact,$Email,$username,$password) -> username;
        $_SESSION['role'] = User::Register($firstName,$lastName,$contact,$Email,$username,$password)->role;
 
         header('Location:home');
        
    }

    public function list()
    {
        session_destroy();
        unset($_SESSION['username']);
    }


}

?>