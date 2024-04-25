<?php

    class User{

        public $username;
        private $email;


        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        // Access modifiers public, private, protected. 
        public function addFriend(){
            return "$this->email added a new friend";

        }

        // getters
        public function getEmail(){
            return $this->email;
        }

        // setters
        public function setEmail($email){
            if(strpos($email, '@') > -1){
                $this->email = $email;
            }
        }


    }

    $userOne = new User('mario', 'mario@onetwo.com');
    $userTwo = new User('Luigi', 'luigi@onetwo.com');

    $userOne->setEmail('yoshi@thenetninja.co.uk');

    echo $userOne->getEmail() . '<br>';
    echo $userTwo->getEmail();

    ?>

   