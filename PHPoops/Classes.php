<?php

    class User {
        // properties and methods

        public $username = 'ryu';
        public $email = 'ryu@thenetninja.co.uk';

        public function addFriend(){
            return "$this->email added a new friend";
        }

    }

    $userOne = new User('mario', 'mario@onetwo.com');
    $userTwo = new User('Luigi', 'luigi@onetwo.com');

    echo $userOne->username . '<br>';
    echo $userOne->email . '<br>';
    echo $userOne->addFriend() . '<br>';

    $userTwo->username = 'yoshi';
    $userTwo->email = 'yoshi@gmail.com';

    echo $userTwo->username . '<br>';
    echo $userTwo->email . '<br>';
    echo $userTwo->addFriend() . '<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Tutorials</title>
</head>
<body>
    
</body>
</html>