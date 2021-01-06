<?php
  require_once('config/system/core/autoload.php');
  use Config\System\Core\AutoLoader;
  use Config\System\Core\PATH;

  AutoLoader::loadEverything();
  $PATH = new PATH();

  
  require_once("{$PATH->VIEW_PUBLIC}Login\Login.php");
?>
