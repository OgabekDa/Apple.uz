<?php
require_once('admin_panel/controller/connect.php');

$sql = "SELECT * FROM `products`";
$data = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($data);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Apple Nukus</h1>
      <?php 
      foreach($data as $key=>$value):
        if($value[0]==$_GET['id']): ?>
      <div class="row align-items-center">
        <div class="col-3">
            <div class="card position-relative" style="height: 18rem;">
                <img src="admin_panel/img/<?= $value[2]; ?>" class="card-img-top" alt="<?= $value[2]; ?>">
                <div class="card-body">
                <h5 class="card-title"><?= $value[1]; ?></h5>
                <p><?= $value[4]; ?></p>
                </div>
            </div>
        </div>
        <!-- form -->
        <div class="col-4">
                <form action="admin_panel/buyurtma/add-user.php" method="POST">
                    <div class="mb-3">
                      <input type="hidden" name="id" value="<?= $value[0]; ?>">
                      <label for="exampleInputEmail1" class="form-label">Telefon</label>
                      <input type="phone" name="phone"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Atiniz</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Adress</label>
                        <input type="text" name="adres" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Buyirtpa beriw</button>
                  </form>
        </div>
      </div>
      <?php endif;
    endforeach; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>