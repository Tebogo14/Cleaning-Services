<?php


require 'models/service.php';
require 'models/province.php';
require 'models/customer.php';

class AddBookingServicesController {

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
        $service_id = $_POST['serviceType'];
        $widthSize = $_POST['width'];
        $lengthSize = $_POST['length'];

        $size =  $widthSize * $lengthSize; 
        $date = $_POST['servicedate'];

        $streetName = $_POST['streetName'];
        $postalAddress = $_POST['postalAddress'];
        $city = $_POST['city'];
        $suburb = $_POST['suburb'];
        $province = $_POST['province'];

        Customer::addBookingServices($service_id, $date, $size,$streetName,$postalAddress,$city,$suburb,$province);
 
        $invoice = Customer::GetInvoice();
        
        require_once("views/addBookingServices.php");

        echo '<script>
        swal("Service Request", "Service was successfully requsted! an Email will be sent shortly with your requested service references  ", "success");
        </script>';
    }

    public function list(){
         $list = Service:: getServiceList();
         $province = Province::getProvices();
         
         require_once("views/addBookingServices.php");
    }

}
?>