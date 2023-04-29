<?php
require_once('connect.php');

$name = $_POST['name'];
$price = $_POST['price'];
$descriptions = $_POST['text'];


$img =time()."-".$_FILES['img']['name'];
$img_tmp = $_FILES['img']['tmp_name'];

move_uploaded_file($img_tmp, "../img/" . $img);

$sql = "INSERT INTO `products` (`id`, `name`, `img`, `price`, `description`) VALUES (NULL, '$name', '$img', '$price', '$descriptions');";
mysqli_query($connect, $sql);
header("Location: ../index.php");

?>