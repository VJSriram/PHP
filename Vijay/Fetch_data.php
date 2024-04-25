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


$sql = "SELECT * FROM `contacts`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " Records found in database<br>";

// Display the rows returned by the SQL query
If($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // Using while loop fetch data
    while($row = mysqli_fetch_assoc($result)){
        echo $row['sno']  . " Hello ". $row['name'] ."Welcome to ". $row['dest'];
        echo "<br>";
    }
}

?>