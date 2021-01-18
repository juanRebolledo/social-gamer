<?php

    class Messages extends Controller{
        private $actionsSql;

        public function __construct() {
            $this->actionsSql = new ActionsSql();
        }
        
        public function t($idChat) {
            $currentUser = "juanasdabassd";
            

            require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/messages/Messages.php");
        }

        public function chatRoom($user1, $user2) {
            $sql = "SELECT idChat FROM `chat` WHERE idUser1 = '$user1' AND idUser2 = '$user2' OR idUser2 = '$user1' AND idUser1 = '$user2'";
            
            $idChat = $this->actionsSql->handlerSelectData($sql)->fetch(PDO::FETCH_ASSOC);
            if ($idChat) {
                header("location: /messages/t/$idChat[idChat]");
            } else {
                $idchat = uniqid('chat_');
                $values = "'$idchat', '$user1', '$user2'";
                $columns = "`idChat`, `idUser1`, `idUser2`";

                if ($this->actionsSql->insertItem($columns, 'chat', $values))
                    header("location: /messages/t/$idchat");
                else
                    header("location: /user/u/$user1");
            }
        }

        public function handlerGetChatRoomsFrom(string $currentUser) {
            $sql = "SELECT * FROM `chat` WHERE idUser1 = '$currentUser' OR idUser2 = '$currentUser'";
            
            return $this->actionsSql->handlerSelectData($sql);
        }

        public function handlerGetNameFromAdressee(string $currentUser, string $idChat) {
            $sql = "SELECT idUser1, idUser2 FROM `chat` WHERE idChat = '$idChat'";
            $chatRoom = $this->actionsSql->handlerSelectData($sql);

            while($chat = $chatRoom->fetch(PDO::FETCH_ASSOC)) {
              $userAdressee = $this->handlerGetAddresseeUser($currentUser, $chat["idUser1"], $chat["idUser2"]);
              
              return $nameUserFromID = $this->actionsSql->handlerSelectColumn('username', 'iduser', 'user', $userAdressee);
            }
        }

        public function handlerGetAddresseeUser(string $currentUser, string $addressee1, string $addressee2) {
            if ($addressee1 == $currentUser) return $addressee2;
            
            return $addressee1;
        }

    }//end class Register