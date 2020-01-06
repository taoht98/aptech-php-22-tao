<?php
echo "<a href=\"./\">BACK</a>";
/* 4. --- INSERT DATA ---
 *
 * Using MySQLi
 *
 */
echo "<h1>4. INSERT DATA</h1>";
/*
 * EXERCISE 1 : Insert at least 5 users into User table.
 *
 */
/*
 * SUGGESTION :
require './helper.php';
$conn = connectDatabase();
$sql = "INSERT INTO namnh_news.nnUser (uLastName,uFirstName,uEmail,uRole)
VALUES
( 'Nam', 'Nguyen', 'namnh.website@gmail.com', 1),
( 'John', 'Cenna', 'cenna.john@hotmail.com', 2),
( 'Henry', 'Tran', 'tranhe@resolutioninc.com', 2),
('Christiaan', 'Hunter', 'ch.pageworth@pageworth.com', 1),
( 'Vicky', 'Nguyen', 'vicky06@gmail.com', 2)";
if ($conn->query($sql) === true) {
echo "Table nnUser created successfully";
} else {
echo "Error creating table : " . $conn->error;
}
$conn->close();
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "myproject";
// Create connection
$connect = mysqli_connect($serverName, $userName, $password, $databaseName);
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO myproject.users (email, password)
VALUES ('tao@gmail.com','tao455'),
('huy@gmail.com','huy962'), ('hoa@gmail.com', 'hoa372'), 
('nha@gmail.com', 'nah927'), ('tin@gmail.com', 'tin028')";
if(mysqli_query($connect, $sql)){
    echo "Table created successfully";
}else {
    echo "Error creating table: ". mysqli_error($connect);
}
mysqli_close($connect);