<?php

    class Messages extends Controller{
        private $actionsSql;
        
        public function t($idChat) {
            $currentUser = "juanasdabassd";
            
            $this->actionsSql = new ActionsSql();

            require_once("{$_SERVER['DOCUMENT_ROOT']}/app/views/messages/Messages.php");
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