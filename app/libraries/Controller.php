<?php
class Controller
{
    public function __construct()
    {

    }

    // define View
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            // load the view
            require_once '../app/views/' . $view . '.php';
        } else {
            die('View does not exists');
        }
    }
    // define Model
    public function model($model)
    {
        require_once '../app/models' . $model . '.php';
        return new $model();
    }
}
