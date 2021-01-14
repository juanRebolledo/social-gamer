<div class="c-online-friend tooltip">
    <a href="/messages/t/<?php echo $chatRoom['idChat'] ?>">
        <?php 
            $sentenceSQL = "SELECT `image` FROM `user` WHERE iduser = '$addressee'";
            $imageStmt = $connection->prepare($sentenceSQL);
            $imageStmt->execute();
            $image = $imageStmt->fetchColumn();
            if ($image == 'NOT') echo "<div class='img-user'></div>";
            else echo "<img class='img-user' src='$image'>";
        ?>
    </a>
    <div class="item-tooltip">
        <?php 
            $sentenceSQL = "SELECT username FROM `user` WHERE iduser = '$addressee'";
            $nameUserStmt = $connection->prepare($sentenceSQL);
            $nameUserStmt->execute();
            $nameUserFromID = $nameUserStmt->fetchColumn();
            echo "<p>$nameUserFromID</p>";
        ?>
    </div>
</div>