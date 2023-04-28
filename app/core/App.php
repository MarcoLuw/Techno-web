<?php
class App {
    protected $route = "admin";
    protected $controller="Home";
    protected $action="Index";
    protected $params=[];

    function __construct(){
 
        $arr = $this->UrlProcess();
 
        // Xử lý router cho admin
        if($this->route == $arr[0]) {
            // Controller
            if( file_exists("./app/controllers/". $arr[0] . "/" . $arr[1] .".php") ){
                $this->controller = $arr[1];
                unset($arr[1]);
            }
            require_once "./app/controllers/". $arr[0] . "/". $this->controller .".php";
            $this->controller = new $this->controller;
    
            // Action
            if(isset($arr[2])){
                if( method_exists( $this->controller , $arr[2]) ){
                    $this->action = $arr[2];
                }
                unset($arr[2]);
            }
    
            // Params
            $this->params = $arr?array_values($arr):[];
    
            call_user_func_array([$this->controller, $this->action], $this->params );
        }
        // Xử lý router cho user
        else {
            if( file_exists("./app/controllers/".$arr[0].".php") ){
                $this->controller = $arr[0];
                unset($arr[0]);
            }
            require_once "./app/controllers/". $this->controller .".php";
            $this->controller = new $this->controller;
    
            // Action
            if(isset($arr[1])){
                if( method_exists( $this->controller , $arr[1]) ){
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }
    
            // Params
            $this->params = $arr?array_values($arr):[];
    
            call_user_func_array([$this->controller, $this->action], $this->params );
        }

        

    }

    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

}
?>