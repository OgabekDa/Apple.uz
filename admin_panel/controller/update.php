<?php
require_once("connect.php");

$id = $_POST['id'];
$text = $_POST['price'];

$sql = "UPDATE `products` SET  `price` = '$text' WHERE `products`.`id` = $id;";

mysqli_query($connect, $sql);
header("Location: ../index.php");
?>