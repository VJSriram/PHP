<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio buttons in PHP</title>
</head>
<body>
    <form action="radiobuttons.php" method="post">
        <input type="radio" name="credit_card" value="Visa">Visa<br>
        <input type="radio" name="credit_card" value="MasterCard">MasterCard<br>
        <input type="radio" name="credit_card" value="Discover">Discover<br>
        <input type="radio" name="credit_card" value="American Express">American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php

    if(isset($_POST["confirm"])){

        $credit_card = null;

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }

        switch($credit_card){
            case "Visa":
                echo "You selected Visa";
                break;
            case "MasterCard":
                echo "You selected MasterCard";
                break;
            case "Discover":
                echo "You selected Discover";
                break;
            case "American Express":
                echo "You selected American Express";
                break;
            default:
                echo "Please make a selection";
        }
       

    }

?>