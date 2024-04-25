<?php

// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbvijay3";

// Create a connection object
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful <br>";
}

//Variables to inserted into the table
$sno = "8";
$name = "Raj";
$age = "32";
$gender = "Male";

//Sql query to be executed
$sql = "INSERT INTO `myTable` (`sno`, `name`, `age`, `gender`) VALUES ('$sno', '$name', '$age', '$gender')";
$result = mysqli_query($conn, $sql);

// Add a new myTable database
if($result){
    echo "Record has been inserted successfully!<br>";
}
else{
    echo "Record was not inserted successfully because of this error ---> ".
    mysqli_error($conn);

}

?>