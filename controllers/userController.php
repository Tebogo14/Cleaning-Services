<?php

require 'models/user.php';

class UserController  {

    public function mvcHandler() 
    {
        $act = isset($_GET['act']) ? $_GET['act'] : NULL;

        switch ($act) 
        {
            case 'delete' :                    
                $this->Delete();
                break;											
            default:
                $this->list();
        }
    }

    public function list()
    {
        $list = User::GetUsers();

        require_once("views/user.php");
    }

    public function Delete()
    {
        User::Delete($_POST['delete']);
        
        $list = User::GetUsers();
        require_once("views/user.php");
    }
}

?>