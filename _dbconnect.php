<?php
$server = "127.0.0.1";
$username = "root";
$password = "Drup@2008";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>
