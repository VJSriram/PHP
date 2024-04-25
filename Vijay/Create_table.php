<?php

echo "Welcome to the stage where we are ready to get connected to a database <br>";


//Ways to connect to a MySQL database
// 1. MySQLi extension
// 2. PDO (PHP data objects)

// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbvijay2";

// Create a connection object
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful <br>";
}

// Create a table in the database
$sql = "CREATE TABLE `myTrip` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL , `gender` VARCHAR(11) NOT NULL , PRIMARY KEY ('SNO'))";
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". 
    mysqli_error($conn);

}




?>