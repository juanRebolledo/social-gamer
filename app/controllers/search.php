<?php
  class Search extends Controller{
    private $actionsSql;

    public function __construct() {   
      $this->actionsSql = new ActionsSql();
      $textToSearch = $_POST['textToSearch'];

      require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/search/search.php");
    }
  }
