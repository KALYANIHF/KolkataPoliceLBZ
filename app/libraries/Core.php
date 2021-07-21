<?php
/*
check the URL form the link and accroding to that we throw the view and model
call the method accroding to that link and controller
and also check the arguments that pass along side to that method
 */
class Core
{
    ## specify all the varibles
    protected $currentController = "Pages";
    protected $currentMethod = 'index';
    protected $parms = [];

    ## call the constructor
    public function __construct()
    {
        ## check if the url is set or not
        $url = $this->getURL();
        ## new have to check if file exists or not
        if ($url == null) {
            $this->currentController = "Pages";
        } elseif (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }
        // make instance of the controller
        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        ## check for the method in the url
        if (isset($url[1])) {
            // have to check if method exists in the controller or not
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        ## check arguments
        $this->parms = $url ? array_values($url) : [];

        // ## call a callback function with a array arguments
        call_user_func_array([$this->currentController, $this->currentMethod], $this->parms);
    }

    ## define getURL function
    public function getURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }

    }

}
