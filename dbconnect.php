<?php
$_SERVER = 'localhost';
$username = 'root';
$password = '';
$database = 'dbmsproject';

$conn = mysqli_connect($_SERVER, $username, $password, $database);

if (!$conn) {

    die('Error' . mysqli_connect_error());
}

?>