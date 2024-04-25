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
    
    // Delete data
    $sql = "DELETE FROM `myTable` WHERE `name` = 'Raj' LIMIT 3";
    $result = mysqli_query($conn, $sql);
    $aff = mysqli_affected_rows($conn);
    echo "<br> Number of affected rows: $aff <br>";

    if($result){
        echo "Deleted rows successfully";
    }
    else{
        $err = mysqli_error($conn);
        echo "Delete unsuccessful due to this error --> $err";
    }

?>