<?php

require 'models/admin.php';

class assignTeamController  {

    public function mvcHandler() 
    {
        $act = isset($_GET['act']) ? $_GET['act'] : NULL;

        switch ($act) 
        {
            case 'update' :                    
                $this->update();
                break;											
            default:
                $this->list();
        }
    }

    public function list()
    {
        $list = Admin::GetAllOpenCases();

        $team = Admin::GetTeamMembers();

        require_once("views/assignTeam.php");
    }

    public function update()
    {
        Admin::Update($_POST['serviceId'] ,$_POST['team']);

        assignTeamController::list();
    }
}

?>