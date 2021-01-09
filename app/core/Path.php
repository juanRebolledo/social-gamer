<?php

  class PATH{
    public $DS;
    public $SITE_ROOT;
      public $APP;
        public $CONTROLLERS;
        public $CORE;
        public $MODEL;
        public $VIEWS;
      public $PUBLIC;
        public $CSS;
        public $JS;

    public function __construct(){
      $this->DS = DIRECTORY_SEPARATOR;

      $this->SITE_ROOT = "";
        $this->APP = "{$this->SITE_ROOT}app{$this->DS}";
          $this->CONTROLLERS = "{$this->APP}controllers{$this->DS}";
          $this->CORE = "{$this->APP}core{$this->DS}";
          $this->MODELS = "{$this->APP}model{$this->DS}";
          $this->VIEWS = "{$this->APP}views{$this->DS}";
        $this->PUBLIC = "{$this->SITE_ROOT}public{$this->DS}";
          $this->CSS = "{$this->PUBLIC}css{$this->DS}";
          $this->JS = "{$this->PUBLIC}js{$this->DS}";
    }

  }//end class PATH
  
?>
