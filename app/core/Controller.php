<?php

class Controller  
{
    protected function model($model)
    {
        if(file_exists('../app/models/' . $model . '.php')){
            require_once '../app/models/' . $model . '.php';
        }

        return new $model();
    }

    protected function view($view, $data = [])
    {
        if( file_exists('../app/views/' . $view . '.php') ){
            require_once '../app/views/' . $view . '.php';
        } else {
            die("View doesn't exists");
        }
    }

    public function _404()
    {
        return $this->view('_404');
    }

    public function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    public function isGet()
    {
        return $_SERVER['REQUEST_METHOD'] == 'GET'; 
    }

    public function validate($data)
    {
        return true;
    }
}
