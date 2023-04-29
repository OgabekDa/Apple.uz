<?php
$host = "localhost";
$user = "root";
$password = "root";
$details = "apple";

$connect = mysqli_connect($host, $user, $password, $details);

if(!$connect){
    die("Error");
}




?>