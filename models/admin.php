<?php

require 'models/connect.php';

class Admin {
    public $custService_date;
    public $custService_size;
    public $srv_id;
    public $service_type;
    public $custService_amount;
    public $TeamName;
    public $TeamId;

	public function __construct($srv_id,
     $custService_date,
     $custService_size,
     $service_type,
     $custService_amount,
     $TeamName,
     $TeamId) {	
	 $this -> srv_id = $srv_id;
	 $this -> custService_date = $custService_date;
	 $this -> custService_size = $custService_size;
     $this -> service_type = $service_type;
	 $this -> custService_amount = $custService_amount;
	 $this -> TeamName = $TeamName;
	 $this -> TeamId = $TeamId;
	}

    public static function GetAllOpenCases()
	{
		$db = Db:: getInstance();
        $services = array();
		$sql = "SELECT * FROM customerservice CS JOIN `service` s on s.service_id = CS.service_id ";
        $results = $db->query($sql);

        foreach ($results->fetchAll() as $service) {
            $teamName = "";
            if($service['team_id'] != 0)
            {
                $team_Id =  $service['team_id'];
                $serv_sql1 = "SELECT * FROM `cleaningTeam` where `team_id` = '$team_Id'";

                $team = $db->query($serv_sql1);

                foreach ($team->fetchAll() as $teams) {
                    $teamName = $teams['team_name'];
                }
            }

	
			$services[] = new Admin($service['custService_id'],$service['custService_date'],$service['custService_size'],$service['service_type'],$service['custService_amount'] , $teamName ,$service['team_id']);
		}
	
	return $services;
	}

    public static function GetTeamMembers()
    {
        $db = Db:: getInstance();
        $teams = array();
        $serv_sql = "SELECT * FROM `cleaningTeam`";
        $results = $db->query($serv_sql);

        foreach ($results->fetchAll() as $team) {
	
			$teams[] = new Admin("","","","","",$team['team_name'],$team['team_id']);
		}

        return $teams;
    }

    public static function Update($serviceId , $team)
    {
        $db = Db:: getInstance(); 
        $username = $_SESSION['username'];
        $qry = "Update customerservice set `team_id` = '$team' WHERE `custService_id` = $serviceId";

        $db->query($qry);
    }

}
