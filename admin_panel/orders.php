<?php
session_start();
require_once('controller/connect.php');

$sql = "SELECT * FROM `orders`";
$data = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($data);


$sql_user = "SELECT * FROM `users`";
$data_user = mysqli_query($connect, $sql_user);
$data_user = mysqli_fetch_all($data_user);

$email = $data_user[1];
$kod = $data_user[3];

$alt = false;
$email_s = $_SESSION['email'];
$kod_s = $_SESSION['kod'];

foreach ($data_user as $value){
  if ($value[1] == $email_s and $value[3] == $kod_s) {
    $alt = true;
  }
}

if($alth){
  header("Location: post.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  
  <div class="container">
  <div class="btn-group" role="group" aria-label="Basic example">
  <a href="index2.php" class="btn btn-primary">Ortga</a>
</div>
 
  <table class="table">
  <thead>
  <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Adres</th>
     
    </tr>
  </thead>
  <tbody>
  <?php $k = 0;
  foreach ($data as $key => $value):
      if ($value[5] == 0) { ?>
    <tr>
      <th scope="row"><?php echo ++$k; ?></th>
      <td><?= $value[2]; ?></td>
      <td><?= $value[1]; ?></td>
      <td><?= $value[3]; ?></td>
    </tr>
    <?php }
endforeach; ?>
  </tbody>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>