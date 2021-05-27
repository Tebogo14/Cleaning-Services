<?php

require 'models/singleInvoice.php';

class SingleInvoiceController  {

    public function mvcHandler() 
    {
        $act = isset($_GET['act']) ? $_GET['act'] : NULL;

        switch ($act) 
        {					
            case 'update':
                $this->update();
                break;											
            default:
                $this->getInvoiceList();
        }
    }

    public function getInvoiceList()
    {
        $invoice = SingleInvoice::getInvoiceList();
        require_once("views/singleInvoice.php");
    }

}

?>