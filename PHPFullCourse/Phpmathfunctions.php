<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Math functions</title>
</head>
<body>
    <form action="Phpmathfucntions.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br>
        <label>y:</label>
        <input type="text" name="y"><br>
        <label>z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php

    $x = $_POST["x"];
    $x = $_POST["y"];
    $x = $_POST["z"];
    $total = null;

    //$total = abs($x);
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);
    //$total = pow($x, $y);
    //$total = min($x, $y, $z);

    //$total = max($x, $y, $z);
    //$total = pi();
    $total = rand(90, 100);

    echo $total;
?>