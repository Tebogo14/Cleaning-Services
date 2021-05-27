<?php
require_once('Route.php');
require_once('View.php');

Route::set('', function() {
  View::make('LoginController');
});

Route::set('register', function() {
  View::make('RegisterController');
});

Route::set('home', function() {
  View::make('HomeController');
});

Route::set('singleInvoice', function() {
  View::make('SingleInvoiceController');
});

Route::set('payInvoice', function() {
  View::make('payInvoiceController');
});

Route::set('service', function() {
  View::make('addBookingServicesController');
});

Route::set('report', function() {
  View::make('AboutUs');
});

Route::set('invoice', function() {
  View::make('InvoiceController');
});

Route::set('my-list', function() {
  View::make('mylistController');
});

?>