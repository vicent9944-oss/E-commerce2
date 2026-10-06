<?php
//start the session
 session_start();




define('SITEURL', 'http://localhost/pyhwh/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'yhwh');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD); //db connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn)); //selecting db


?>


















