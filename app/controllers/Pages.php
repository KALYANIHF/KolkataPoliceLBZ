<?php
class Pages extends Controller
{
    public function __construct()
    {

    }

    ## default index method
    public function index()
    {
        $this->view('pages/index');
    }
    ## define about method
    public function about()
    {
        $this->view('pages/about');
    }
}
