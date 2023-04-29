<?php
require_once('../controller/connect.php');

$sql = "SELECT * FROM `orders`";
$data_user = mysqli_query($connect, $sql);
$data_user = mysqli_fetch_all($data_user);

$sqli = "SELECT * FROM `products`";
$data = mysqli_query($connect, $sqli);
$data = mysqli_fetch_all($data);

$id_phone = $_POST['id'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$adres = $_POST['adres'];
foreach($data as $value){
    if($value[0]==$id_phone){
        $phone_name = $value[1];
    }
}

$qwe = "INSERT INTO `orders` (`id`, `phone`, `name`, `adres`, `product`, `is_delete`) VALUES (NULL, '$phone', '$name', '$adres', '$phone_name', '0');";
mysqli_query($connect, $qwe);
header("Location: ../../index.php");

?>