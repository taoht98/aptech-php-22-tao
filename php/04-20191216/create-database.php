<?php
$serverName = "localhost";
$userName = "root";
$password = "";

// Create connection
$connect = mysqli_connect($serverName, $userName, $password);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

//create database
$sql = "CREATE DATABASE aptech_php_22_4";
if (mysqli_query($connect, $sql)){
    echo "Database created successfully";
}else {
    echo "Error creating database: " .mysqli_error($connect);
}
mysqli_close($connect);
?>