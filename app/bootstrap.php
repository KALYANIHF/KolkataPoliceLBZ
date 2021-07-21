<?php
## all the includes are specify here

// load the libraries

spl_autoload_register(function ($class) {
    require_once 'libraries/' . $class . '.php';
});
