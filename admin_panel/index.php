<?php
session_start();
require_once('controller/connect.php');

$sql = "SELECT * FROM `products`";
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
  <div class="container">
  
  <div class="container">
  <div class="btn-group" role="group" aria-label="Basic example">
  <a href="index2.php" class="btn btn-primary">Ortga</a>
  <a href="viev/add.php" class="btn btn-primary">Malumot yuklash</a>
</div>
  

  <table class="table">
  <thead>
  <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">img</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php $k = 0;
  foreach ($data as $key => $value):
      if ($value[5] == 0) { ?>
    <tr>
      <th scope="row"><?php echo ++$k; ?></th>
      <td><?= $value[1]; ?></td>
      <td><?= $value[3]; ?></td>
      <td><?= $value[4]; ?></td>
      <td><div class="card" style="width: 5rem;">
      <img src="img/<?= $value[2]; ?>" class="card-img-top" alt="<?= $value[2]; ?>">
      </div></td>
      <td>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exa<?php echo $key; ?>">
  Update
</button>

<!-- Modal -->
<div class="modal fade" id="exa<?php echo $key; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="controller/update.php" method="POST">
            <input type="hidden" name="id" value="<?= $value[0]; ?>">
            <input type="numebr" name="price" value="<?= $value[3]; ?>">
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Save changes">
      </div>
      </form>
    </div>
  </div>
</div>
      </td>
      <td>
      <form action="controller/is_delete.php" method="POST">
        <input type="hidden" name="id" value="<?= $value[0] ?>">
        <input type="submit"class="btn btn-danger btn-danger-rgb" value="Delete">
        </form>
      </td>
    </tr>
    <?php }
endforeach; ?>
  </tbody>
</table>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>