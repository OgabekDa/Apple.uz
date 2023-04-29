<?php
require_once("connect.php");

$id = $_POST['id'];


$sql = "UPDATE `products` SET  `is_delete` = '1' WHERE `products`.`id` = $id;";

mysqli_query($connect, $sql);
header("Location: ../index.php");
?>