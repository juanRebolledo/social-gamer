<?php
class Route{

    protected $controller = "home";
    protected $method = "index";
    protected $params = [];


    // public function __construct(){
    //     $url = $this->parseUrl();

    //     if(isset($url[0])){
    //         if(file_exists("../app/controllers/" . $url[0] . ".php")){
    //             $this->controller = $url[0];
    //             unset($url[0]);
    //         }
    //     }

    //     require_once "../app/controllers/" . $this->controller . ".php";

    //     $this->controller = new $this->controller;

    //     if(isset($url[1])){
    //         if(method_exists($this->controller, $url[1])){
    //             $this->method = $url[1];
    //             unset($url[1]);
    //         }
    //     }

    //     $this->params = $url ? array_values($url) : [];
    //     call_user_func_array([$this->controller, $this->method], $this->params);
    // }

    // public static function parseUrl(){
    //     /*if(isset($_GET["url"]))
    //         return $url = explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));*/
    //     return strtolower($_GET['url']);
    // }
   // public static $validRoutes = array();

    public static function set($route, $function){
        //self::$validRoutes[] = $route;
        
        
        if(isset($_GET['url'])){
            
            if(strtolower($_GET['url']) == $route){
                echo $route;
                $function->__invoke();
            }
        }else{
            $route = "welcome";
            $function = function(){
                Home::CreateView("Welcome");
            };
            $function->__invoke();
        }
        
    }
}
?>