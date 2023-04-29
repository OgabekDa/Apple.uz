<?php
session_start();
require_once('controller/connect.php'); 
$name=$_POST['email'];
$kod=$_POST['password'];

$_SESSION['email'] = $name;
$_SESSION['kod'] = $kod;

$sql = "SELECT * FROM `users`";
$data = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($data);

$alt = false;
$email_s = $_SESSION['email'];
$kod_s = $_SESSION['kod'];

foreach ($data as $value){
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
    
  <div class="btn-group" role="group" aria-label="Basic example">
  <a href="../index.php" class="btn btn-primary">Ortga</a>
</div>
<?php
foreach ($data as $value):
  ?>
<center><br><br>
    <a href="index.php">
  <button type="button" class="btn btn-primary">PRODUCTS</button>
    </a>

<a href="orders.php">
  <button type="button" class="btn btn-success">ORDERS</button>
</a>

<a href="viev/login.php">
<button type="button" class="btn btn-warning">Login qoshish</button>
</a> 
<a href="../index.php">
<button type="button" class="btn btn-danger">ORTGA</button>
</a><br><br>
    
  <div class="logo">
        <a href="admin_panel/index2.php">
          <img src="img/YtbcAJmxYROSx0g3YcnEDhDNEMQyfgEeFKftbThi (1).PNG" class="img-thumbnail" alt="logo platz" height="500" width="500">
        </a>
      </div>
  </div>
  <?php 
endforeach; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>