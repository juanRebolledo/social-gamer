<?php
    require_once("../config/system/core/autoload.php");
    use Config\System\Core\AutoLoader;
    use Config\System\Core\PATH;
    use Controllers\UserService;
   
    AutoLoader::loadEverything();
    $PATH = new PATH();
    $objUser = new UserService();
    
    
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $user = $_POST["user"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $name = $firstName . " " . $lastName;

    // echo "<br>";
    // echo "nombre: ". $name . "<br>";
    // echo "usuario: ". $user. "<br>";
    // echo "contra: ". $password. "<br>";
    // echo "email: ". $email. "<br>";

    
    

    $newUser = $objUser->handlerUserRegister($name,$user,$password,$email);
    
    
    if($newUser == true)
        header("Location: ./../{$PATH->SITE_ROOT}index.php?sepudo");
    else
        header("Location: ./../{$PATH->SITE_ROOT}index.php?nosepudo");
?>
