<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $PATH = new PATH(); 
        require_once("{$PATH->HEAD}head.php");
        require_once("{$PATH->HEAD}firebaseHead.php"); 
    ?>
    <link rel="stylesheet" href="<?php echo("/{$PATH->CSS}messages.css"); ?>">
    <title>Gamer Social | Messages</title>
</head>
<body>
    <div class="app">
        <div class="app-messages">
            <div class="online-friends">
                <?php
                    $chatRooms = $this->handlerGetChatRoomsFrom($currentUser);

                    while($chatRoom = $chatRooms->fetch(PDO::FETCH_ASSOC)) {
                      $addressee = $this->handlerGetAddresseeUser($currentUser, $chatRoom['idUser1'], $chatRoom['idUser2']);
                      
                      require("{$PATH->COMPONENTS}messages/onlineFriends.php");
                    }
                ?>
            </div>
            <div class="container-messages flex-center">
                <div class="messages-header">
                    <span>Mensajes con</span>
                    <div class="username">
                        <?php 
                            $username = $this->handlerGetNameFromAdressee($currentUser, $idChat);
                            echo "<p>$username</p>";
                        ?>
                    </div>
                </div>
                <div class="messages" id="messages"></div>
                <div class="c-send-message">
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
    
    <script>localStorage.setItem("currentUser", "<?php echo $currentUser ?>")</script>
    <script src="/<?php echo str_replace('\\', '/' ,$PATH->FIREBASE) . "config.js" ?>"></script>
    <script src="/<?php echo str_replace('\\', '/' ,$PATH->FIREBASE) . "firebase.js" ?>"></script>
    <script src="/<?php echo str_replace('\\', '/' ,$PATH->JS) . "messages/messages.js" ?>"></script>
</body>
</html>