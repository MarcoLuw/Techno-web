<?php 
class Controller {
    // Call Model
    public function model($model) {
        require_once "./app/models/" .$model. ".php";
        return new $model;
    }

    // Call View
    public function view($view, $data = []) {
        require_once "./app/views/masterLayout/" .$view. ".php";
    }

    public function viewAuthAdmin($view, $data = []) {
        require_once "./app/views/admin/" .$view. ".php";
    }

    public function viewAuthUser($view, $data = []) {
        require "./app/views/default/" .$view. ".php";
    }
}
?>