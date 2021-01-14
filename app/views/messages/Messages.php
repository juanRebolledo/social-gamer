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
                    $sentenceSQL = "SELECT * FROM `chat` WHERE idUser1 = '$currentUser' OR idUser2 = '$currentUser'";
                    $data = $connection->prepare($sentenceSQL);
                    $data->execute();

                    while($chatRoom = $data->fetch(PDO::FETCH_ASSOC)) {
                        $addressee = $chatRoom["idUser1"]; 
                        if ($addressee == $currentUser) $addressee = $chatRoom["idUser2"];

                        require("{$PATH->COMPONENTS}messages/onlineFriends.php");
                    }
                ?>
            </div>
            <div class="container-messages flex-center">
                <div class="messages-header">
                    <span>Mensajes con</span>
                    <div class="username">
                        <?php 
                            $sentenceSQL = "SELECT idUser1, idUser2 FROM `chat` WHERE idChat = '$idChat'";
                            $idUserStmt = $connection->prepare($sentenceSQL);
                            $idUserStmt->execute();
                            while($username = $idUserStmt->fetch(PDO::FETCH_ASSOC)) {
                                $userAdressee = $username["idUser1"]; 
                                if ($userAdressee == $currentUser) $userAdressee = $username["idUser2"];

                                $sentenceSQL = "SELECT username FROM `user` WHERE iduser = '$userAdressee'";
                                $nameUserStmt = $connection->prepare($sentenceSQL);
                                $nameUserStmt->execute();
                                $nameUserFromID = $nameUserStmt->fetchColumn();

                                echo "<p>$nameUserFromID</p>";
                                break;
                            }
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