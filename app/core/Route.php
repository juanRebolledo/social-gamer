<?php
  class Route{
    public $url;
    public $controller;
    public $method;
    public $params = [];

    public function __construct() {
      $this->url = $this->getUrl();
      $this->controller = $this->getController();
      $this->method = $this->getMethod();
      $this->params = $this->getParams();
      $this->callUrl();
    }

    public function callUrl() {
      if(class_exists($this->controller)) {
        $this->controller = new $this->controller;
        call_user_func_array([$this->controller, $this->method], $this->params);
      }
      else call_user_func_array(["E404", "indexView"], ["E404"]);
    }

    public static function getUrl(){
      if(isset($_GET["url"])){
        $url = explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
            
        return $url;
      }
    }

    public function getController() {
      if(isset($this->url[0])) {
        $controller = $this->url[0];
        unset($this->url[0]);

        return $controller;
      } else {
        $controller = "welcome";
      
        return $controller;
      }
    }

    public function getMethod() {
      if(isset($this->url[1])) {
        $method = $this->url[1];
        unset($this->url[1]);

        return $method;
      } else {
        $method = "indexView";

        return $method;
      }
    }

    public function getParams() {
      $params = $this->url ? array_values($this->url) : [$this->controller];
      
      return $params;
    }
  }
?>
