<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "aptech_php_22_4";
// Create connection
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);
if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO aptech_php_22_4.users (email, password)
VALUES ('tao@gmail.com','tao123'),
('thanh@gmail.com','thanh456')";

if(mysqli_query($connect, $sql)){
    echo "Records created successfully";
}else {
    echo "Error creating records: ". mysqli_error($connect);
}
mysqli_close($connect);
?>