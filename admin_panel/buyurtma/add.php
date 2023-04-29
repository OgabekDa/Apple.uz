<?php
require_once('../controller/connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$kod = $_POST['kod'];



$sql = "INSERT INTO `users` (`id`, `login`, `name`, `pssword`) VALUES (NULL, '$email', '$name',  '$kod');";
mysqli_query($connect, $sql);
header("Location: ../index.php");

?>