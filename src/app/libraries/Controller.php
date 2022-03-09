<?php
// load the model and view
namespace App;

class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    //load the view (checks for file)
    public function view($view, $data = [])
    {
        if (file_exists('../app/views' . $view . '.php')) {
            require_once '../app/views' . $view . '.php';
        } else {
            die('view file does not exist');
        }
    }
}
