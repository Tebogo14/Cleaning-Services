<?php

require 'models/invoice.php';

class mylistController  {

    public function mvcHandler() 
    {
        $act = isset($_GET['act']) ? $_GET['act'] : NULL;

        switch ($act) 
        {					
            case 'delete':
                $this->delete();
                break;											
            default:
                $this->getList();
        }
    }

    public function delete()
    {
        Invoice::delete();
    }


    public function getList()
    {
        $invoice = Invoice::getInvoice();
        require_once("views/mylist.php");
    }

}

?>