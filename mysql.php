<?php
$hostname = 'localhost';
$username = 'root';
$password = 'hehe12334';
$database = 'mydb';
$port = 3306;

$conn = new mysqli($hostname, $username, $password, $database, $port);
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected";

// $sql = "INSERT INTO php (title) VALUE ('First Blog')";

// if($conn->query($sql) === TRUE) {
//     echo 'Queried';
// } else {
//     echo $conn->error;
// }

$sql = "SELECT * FROM php";
$result = $conn->query($sql);

if($result->num_rows>0) {
    while($row = $result->fetch_assoc()){
        echo $row['title'];
    }
}

$conn->close();

?>