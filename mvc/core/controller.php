<?php
class controller{

    public function model($model)
    {
        require_once "./mvc/models/" . $model . ".php";
        return new $model;
    }

    public function app($controller)
    {
        require_once "./mvc/controllers/" . $controller . ".php";
        return new $controller;
    }

    public function view($view, $data = [])
    {
        require_once "./mvc/views/" . $view . ".php";
    }

}
?>