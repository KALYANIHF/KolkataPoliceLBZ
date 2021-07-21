<?php
## all the includes are specify here

## require the config file
require_once 'config/config.php';
// load the libraries

spl_autoload_register(function ($class) {
    require_once 'libraries/' . $class . '.php';
});
