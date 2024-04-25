<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Tiz</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza"> Pizza <br>
        <input type="checkbox" name="foods[]" value="Burger"> Burger <br>
        <input type="checkbox" name="foods[]" value="Sandwich"> Sandwich <br>
        <input type="checkbox" name="foods[]" value="Taco"> Taco <br>
        <input type="submit" name="submit"><br> 
    </form>
</body>
</html>
<?php

    if(isset($_POST["submit"])){

        $foods = $_POST["foods"];
        
            foreach($foods as $food){
                echo $food . "<br>";
            }
    }

?>