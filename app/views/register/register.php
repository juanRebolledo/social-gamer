<?php
  $sessionMapper = new SessionMapper();

  if ($sessionMapper->isActiveSession())
    header("Location: /home");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    $PATH = new Path();
    require_once("{$PATH->COMPONENTS}utilsLoginRegister.php");
  ?>
  <title>Registrarse</title>
</head>

<body>
  <div class="app">
    <section class="bg sky">
      <?php require_once("{$PATH->FORMS}formRegister.php"); ?>
    </section>
  </div>
  <script src="<?php echo "{$PATH->JS}animationStars.js" ?>"></script>
</body>
</html>
