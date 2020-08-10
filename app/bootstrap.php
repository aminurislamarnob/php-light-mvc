<?php
//load config
require_once 'config/config.php';

//load libraries
// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

spl_autoload_register(function($clases){
    require_once 'libraries/'. $clases .'.php';
});

?>