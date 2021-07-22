<?php
## all the includes are specify here

## require the config file
require_once 'config/config.php';
// load the libraries

## load session helpers
require_once 'helpers/session_helper.php';

## load url helpers
require_once 'helpers/url_helper.php';

spl_autoload_register(function ($class) {
    require_once 'libraries/' . $class . '.php';
});
