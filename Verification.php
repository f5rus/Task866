<?php
    interface IAuthenticatable {
        public function hashPassword($userInput);
        public function verifyPassword($userInput);
    }

    class Authenticatable implements IAuthenticatable{
        public function hashPassword($userInput){
            $_SESSION[$userInput] =  crypt('123','asd');
        }
        public function verifyPassword($userInput){
            
            if(!$_SESSION[$userInput])
            {                
                $this->hashPassword($userInput);
                echo 'password set';
            }
            else {
                echo $_SESSION[$userInput];
            }
            
        }
    }
