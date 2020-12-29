<?php 
  $DS = DIRECTORY_SEPARATOR;
  $_SESSION['SITE_ROOT'] = ""; // esto puede quedar unicamente como 'DS'
  $_SESSION['ASSETS_PATH'] = $_SESSION['SITE_ROOT'].'assets'.$DS;
  $_SESSION['COMPONENTS_PATH'] = $_SESSION['VIEW_PATH'].'components'.$DS;
  $_SESSION['CONTROLLER_PATH'] = $_SESSION['SITE_ROOT'].'controllers'.$DS;
  $_SESSION['IMAGES_PATH'] = $_SESSION['ASSETS_PATH'].'img'.$DS;
  $_SESSION['MODEL_PATH'] = $_SESSION['SITE_ROOT'].'models'.$DS;
  $_SESSION['STYLES_PATH'] = $_SESSION['SITE_ROOT'].'styles'.$DS;
  $_SESSION['VIEW_PRIVATE_PATH'] = $_SESSION['VIEW_PATH'].'private'.$DS;
  $_SESSION['VIEW_PATH'] = $_SESSION['SITE_ROOT'].'views'.$DS;
  $_SESSION['VIEW_PUBLIC_PATH'] = $_SESSION['VIEW_PATH'].'public'.$DS;
?>
