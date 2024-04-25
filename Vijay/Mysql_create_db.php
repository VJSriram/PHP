<?php
echo "Welcome to the stage where we are ready to get connected to a database <br>";


//Ways to connect to a MySQL database
// 1. MySQLi extension
// 2. PDO (PHP data objects)

// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection object
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

// Create a db
$sql = "CREATE DATABASE dbvijay6";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db was created successfully!";
}
else{
    echo "The dab was not created successfully!". mysqli_connect_error($conn);

}




?>