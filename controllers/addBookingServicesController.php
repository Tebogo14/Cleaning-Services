<?php


require 'models/service.php';
require 'models/province.php';

class AddBookingServicesController {

    public function mvcHandler() 
    {
        $act = isset($_GET['act']) ? $_GET['act'] : NULL;

        switch ($act) 
        {
            case 'add' :                    
                $this->insert();
                break;						
            case 'update':
                $this->update();
                break;				
            case 'delete' :					
                $this -> delete();
                break;								
            default:
                $this->list();
        }
    }


    public function update()
    {
        
    }

    public function list(){
         $list = Service:: getServiceList();
         $province = Province::getProvices();
         
         require_once("views/addBookingServices.php");
    }

}
?>