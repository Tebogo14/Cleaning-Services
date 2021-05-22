<?php

require_once('Route.php');
require_once('View.php');

Route::set('', function() {
  View::make('Home');
});

Route::set('about-us', function() {
  View::make('AboutUs');
});

Route::set('service', function() {
  View::make('addBookingServices');
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