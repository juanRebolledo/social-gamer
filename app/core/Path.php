<?php

  class PATH{
    public $DS;
    public $SITE_ROOT;
      public $APP;
        public $CONTROLLERS;
        public $CORE;
        public $MODELS;
          public $FIREBASE;
        public $VIEWS;
          public $COMPONENTS;
            public $FORMS;
            public $HEAD;
            public $HEADER;
            public $POSTS;
            public $LANDING;
      public $PUBLIC;
        public $ASSETS;
          public $IMG;
        public $CSS;
        public $JS;

    public function __construct(){
      $this->DS = DIRECTORY_SEPARATOR;

      $this->SITE_ROOT = "";
        $this->APP = "{$this->SITE_ROOT}app{$this->DS}";
          $this->CONTROLLERS = "{$this->APP}controllers{$this->DS}";
          $this->CORE = "{$this->APP}core{$this->DS}";
          $this->MODELS = "{$this->APP}models{$this->DS}";
            $this->FIREBASE = "{$this->MODELS}firebase{$this->DS}";
          $this->VIEWS = "{$this->APP}views{$this->DS}";
            $this->COMPONENTS = "{$this->VIEWS}components{$this->DS}";
              $this->FORMS = "{$this->COMPONENTS}forms{$this->DS}";
              $this->HEAD = "{$this->COMPONENTS}head{$this->DS}";
              $this->HEADER = "{$this->COMPONENTS}header{$this->DS}";
              $this->POSTS = "{$this->COMPONENTS}posts{$this->DS}";
              $this->LANDING = "{$this->COMPONENTS}landing{$this->DS}";
        $this->PUBLIC = "{$this->SITE_ROOT}public{$this->DS}";
          $this->ASSETS = "{$this->PUBLIC}assets{$this->DS}";
            $this->IMG = "{$this->ASSETS}img{$this->DS}";
          $this->CSS = "{$this->PUBLIC}css{$this->DS}";
          $this->JS = "{$this->PUBLIC}js{$this->DS}";
    }

  }//end class PATH
  
?>
