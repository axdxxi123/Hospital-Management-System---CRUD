<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hospital_db';

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection Failed: ' . mysqli_connect_error()); 
}
?>
