<?php

    class Router{

        public $uri;
        public $controller;
        public $method;
        public $parameter;

        public function __construct(){
            $this->setUri();
            $this->setController();
            $this->setMethod();
            $this->setParameter();
        }

        public function setUri(){
            $this->uri = explode('/', $_SERVER['REQUEST_URI']);
        }

        public function setController(){
            $this->controller = $this->uri[2] === '' ? 'Home' : $this->uri[2];
        }

        public function setMethod(){
            $this->method = !empty($this->uri[3]) ? $this->uri[3] : "exec";
        }

        public function setParameter(){
            $this->parameter = !empty($this->uri[4]) ?$this->uri[4] : '';
        }

        public function getUri(){
            return $this->uri;
        }

        public function getController(){
            return $this->controller;
        }

        public function getMethod(){
            return $this->method;
        }

        public function getParameter(){
            return $this->parameter;
        }

    }//end class Router
?>