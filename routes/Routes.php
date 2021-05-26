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

Route::set('about-us', function() {
  View::make('AboutUs');
});

Route::set('service', function() {
  View::make('addBookingServicesController');
});

Route::set('report', function() {
  View::make('AboutUs');
});

Route::set('invoice', function() {
  View::make('AboutUs');
});

Route::set('my-list', function() {
  View::make('AboutUs');
});

?>