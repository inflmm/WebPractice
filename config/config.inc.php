<?php
$host = 'localhost';
$db = 'inspiredbu';
$user = 'root';
$pass = 'root';

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
?>