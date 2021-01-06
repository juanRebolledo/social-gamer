<?php
namespace Config\System\Core;
  class PATH{
    public $SITE_ROOT;
    public $ASSETS;
    public $VIEW;
    public $CONTROLLERS;
    public $MODEL;
    public $STYLES;
    public $COMPONENTS;
    public $IMAGES;
    public $VIEW_PRIVATE;
    public $VIEW_PUBLIC;

    public function __construct(){
      $DS = DIRECTORY_SEPARATOR;
      $this->SITE_ROOT = "";
      $this->ASSETS = "assets{$DS}";
      $this->VIEWS = "views{$DS}";
      $this->CONTROLLERS = "controllers{$DS}";
      $this->MODELS = "models{$DS}"; 
      $this->STYLES = "styles{$DS}";
      $this->COMPONENTS = "views{$DS}components{$DS}";
      $this->IMAGES = "assets{$DS}img{$DS}";
      $this->VIEW_PRIVATE = "views{$DS}private{$DS}";
      $this->VIEW_PUBLIC = "views{$DS}public{$DS}";
    }
  }
  
?>
