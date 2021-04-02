<?php
  $sessionMapper = new SessionMapper();
  if (!$sessionMapper->isActiveSession())
    header("Location: /");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $PATH = new Path();
    require_once("{$PATH->HEAD}head.php");
    require_once("{$PATH->HEAD}firebaseHead.php");
  ?>
  <link rel="stylesheet" href="<?php echo ("/{$PATH->CSS}messages.css"); ?>">
  <title>Gamer Social | Messages</title>
</head>
<body>
  <div class="app">
    <div class="app-messages d-flex">
      <div class="align-items-center d-flex flex-column online-friends">
        <?php
          $chatRooms = $this->handlerGetChatRoomsFrom($_SESSION['iduser']);
          while ($chatRoom = $chatRooms->fetch(PDO::FETCH_ASSOC)) {
            $addressee = $this->handlerGetAddresseeUser($_SESSION['iduser'], $chatRoom['idUser1'], $chatRoom['idUser2']);
            require("{$PATH->COMPONENTS}messages/onlineFriends.php");
          }
        ?>
      </div>

      <div class="align-items-center container-messages d-flex flex-column justify-content-start">
        <div class="messages-header">
          <span>Mensajes con</span>
          <div class="d-flex justify-content-between username">
            <?php
              $username = $this->handlerGetNameFromAdressee($_SESSION['iduser'], $idChat);
              echo "<span>$username </span><a href='/home'> Volver al inicio</a>";
            ?>
          </div>
        </div>

        <div class="d-flex flex-column messages" id="messages"></div>
        <div class="c-send-message d-flex">
          <div class="form-group">
            <input autocomplete="off" type="text" id="message-to-send" placeholder="Escribe un mensaje">
          </div>

          <div class="btn-send-message flex-center" id="btn-send-message">
            <?php require("{$PATH->IMG}send_message.svg"); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    localStorage.setItem("currentUser", "<?php echo $_SESSION['iduser'] ?>")
  </script>
  <script src="/<?php echo str_replace('\\', '/', $PATH->FIREBASE) . "config.js" ?>"></script>
  <script src="/<?php echo str_replace('\\', '/', $PATH->FIREBASE) . "firebase.js" ?>"></script>
  <script src="/<?php echo str_replace('\\', '/', $PATH->JS) . "messages/messages.js" ?>"></script>
</body>
</html>
