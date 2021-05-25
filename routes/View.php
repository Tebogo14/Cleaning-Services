<?php

class View {

  public static function make($view) {

    if (Route::isRouteValid()) {
        require_once( './controllers/'.$view.'.php' );

        $controller = new $view();	
        $controller->mvcHandler();

        $newView = substr($view,0,strpos($view,"Controller"));

        require_once( './views/'.$newView.'.php' );
        return 1;
    }

  }

}