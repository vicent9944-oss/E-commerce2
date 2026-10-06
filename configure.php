<?php


$host = "localhost";
$user = "root";
$password = "";
$database = "userlogin_db";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("connection failed: ". $conn->connect_error);
}

?>