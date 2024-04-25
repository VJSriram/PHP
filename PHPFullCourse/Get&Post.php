


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Get&Post.php" method="post">
        <lable>username:</lable><br>
        <input type="text" name="username"><br>
        <lable>password:</lable><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>   
</body>
</html>
<?php


/*  $_GET, $_POST = special vairables used to collect data from an HTML form data is sent to the file in the action attribute of <form>
<form action = "some_file.php" method="get">

$_GET = Data is appended to the URL 
ex: http://localhost/PHPFullCourse/Get&Post.php?username=vijay&password=123123
Not secure
char limit
Bookmark is possible w/ values
GET requests can be cached
Better for a search page

$_POST = Data is packaged inside the body of the HTTP request
ex: http://localhost/PHPFullCourse/Get&Post.php
MORE SECURE
No data limit
Cannot bookmark
Requests are not cached
Better for submitting credentials

*/


    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
?>

