<?php


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
        $cust_id;
        $name;
        $surname;
        $username;
        $password;
        $contact;
        //Customer::addBookingServices();
    }

    public function list(){
                            
    }

}
?>