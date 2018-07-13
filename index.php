<?php

@session_start();

/**
 * PROJECT FOR EKOBITS ASSESSMENT {Ojo Oluwaseun Joseph}
 */

include_once 'config/config.php';
include_once 'config/db.php';
include_once 'config/router.php';

//Start application by calling router class

if (!is_dir(VIEWS)){
    die('Please set views folder correctly');
}

if (!is_dir(CONTROLLERS)){
    die('Please set controllers folder correctly');
}

if (!is_dir(MODELS)){
    die('Please set models folder correctly');
}

$router = new router();