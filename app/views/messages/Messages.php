<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $PATH = new PATH(); 
        require_once("{$PATH->HEAD}head.php") 
    ?>
<link rel="stylesheet" href="<?php echo "{$PATH->CSS}messages.css"?>">
    <title>Gamer Social | Messages</title>
</head>
<body>
    <div class="app">
        <div class="app-messages">
            <div class="online-friends">
                <div class="c-online-friend tooltip">
                    <a href="messages/asdahnasdhasd">
                        <div class="img-user"></div>
                    </a>
                    <div class="item-tooltip">
                        <p>User 1</p>
                    </div>
                </div>
                <div class="c-online-friend tooltip">
                    <a href="messages/asdahnasdhasd">
                        <div class="img-user"></div>
                    </a>
                    <div class="item-tooltip">
                        <p>User 1</p>
                    </div>
                </div>
                <div class="c-online-friend tooltip">
                    <a href="messages/asdahnasdhasd">
                        <div class="img-user"></div>
                    </a>
                    <div class="item-tooltip">
                        <p>User 1</p>
                    </div>
                </div>
            </div>
            <div class="container-messages flex-center">
                <div class="messages-header">
                    <span>Mensajes con</span>
                    <div class="username">
                        <p>Juan Rebolledo</p>
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

    <script src="<?php echo str_replace('\\', '/' ,$PATH->FIREBASE) . "config.js" ?>"></script>
    <script src="<?php echo str_replace('\\', '/' ,$PATH->FIREBASE) . "firebase.js" ?>"></script>
    <script src="<?php echo str_replace('\\', '/' ,$PATH->JS) . "messages/messages.js" ?>"></script>
</body>
</html>