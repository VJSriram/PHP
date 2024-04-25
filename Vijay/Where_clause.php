<?php

    // Connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contacts";

    // Create a connection object
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was successful <br>";
    }

        $sql = "SELECT * FROM `contacts` WHERE `name` = 'vijay'";
        $result = mysqli_query($conn, $sql);

        // Find the number of records returned
        $num = mysqli_num_rows($result);
        echo $num . " Records found in database<br>";

            // Display the rows returned by the SQL query
            If($num > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo $row['sno']  . " Hello ". $row['name'] . "Welcome to ". $row['dest'];
                    echo "<br>";
                }

                // Usage of WHERE clause to update data
                $sql = "UPDATE `contacts` SET `name` = 'Ratan Tata' WHERE `email` = 'test@test.com'";
                $result = mysqli_query($conn, $sql);
                echo var_dump($result);
                $aff = mysqli_affected_rows($conn);
                echo "<br> Number of affected rows: $aff";

                if($result){
                    echo "We updated the record successfully";
                }
                else{
                    echo "We are not able to update the record successfully";
                }

}



?>