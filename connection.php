<?php
$servername = "localhost";
$username = "root";
$password = "awesome2018";
$dbname = "ihsteacherdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>