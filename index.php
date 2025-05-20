<?php
spl_autoload_register(function($className){
    include "system/".$className.".php";
});

include "app/config/app.php";
include "system/Route.php";
include "routes/web.php";

Route::handle();