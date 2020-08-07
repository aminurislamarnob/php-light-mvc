<?php
//load config
require_once 'config/config.php';

//load libraries
// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

spl_autoload_register(function($classe){
    require_once 'libraries/'. $classe .'.php';
});

?>