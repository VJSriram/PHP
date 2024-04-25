<?php

    class accessModifiers{

        // access modifier
        public $username;
        // access modifier
        private $email;

        // access modifier
        protected $address;

        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        // Access modifiers public, private, protected. 
        public function addFriend(){
            return "$this->email added a new friend";

        }

    }

    $amOne = new accessModifiers('mario', 'mario@onetwo.com');
    $amTwo = new accessModifiers('Luigi', 'luigi@onetwo.com');


    echo $amOne->addFriend();
?>