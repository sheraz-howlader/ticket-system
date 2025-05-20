<?php
//start::enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
//end::enable error reporting

spl_autoload_register(function($className){
    include "system/".$className.".php";
});

include "config/app.php";
include "system/Route.php";
include "routes/web.php";

Route::handle();