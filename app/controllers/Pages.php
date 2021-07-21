<?php
class Pages extends Controller
{
    public function __construct()
    {

    }

    ## default index method
    public function index()
    {
        echo "index page";
    }
    ## define about method
    public function about()
    {
        echo "about page";
    }
}
