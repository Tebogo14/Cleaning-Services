<?php

require 'models/singleInvoice.php';

class payInvoiceController  {

    public function mvcHandler() 
    {
        $act = isset($_GET['act']) ? $_GET['act'] : NULL;

        switch ($act) 
        {					
            case 'update':
                $this->update();
                break;											
            default:
                $this->list();
        }
    }

    public function update()
    {
        SingleInvoice::payInvoice();
        echo '<script>
        swal("Payment", "Payment was successful", "success");
        </script>';
    }

    public function list()
    {

    }
}
?>

