<?php

require 'models/invoice.php';

class InvoiceController  {

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
        $invoice = Invoice::getInvoice();
        require_once("views/invoice.php");
    }

}

?>