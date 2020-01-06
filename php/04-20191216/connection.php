<?php
$severName = "localhost";
$userName = "root";
$password = "";

// Create connection
$connect = mysql_connect($severName, $userName, $password);

// Check connection
if (!$connect){
    die("Connection falled: " .mysql_connect_error());
}
echo "Connected successfully";