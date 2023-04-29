<?php
require_once('admin_panel/controller/connect.php');

$sql = "SELECT * FROM `products`";
$data = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($data);

?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>  
  </head>
  <body>
   

      <div class="logo">
        <a href="admin_panel/post.php">
          <img src="admin_panel/img/IMG_20230201_220047.jpg" class="img-thumbnail" class="rounded float-start" alt="logo platz" height="55" width="55">
        <hr>
        </a>
      </div>
      <div class="container">
      <h1>Apple Nukus</h1>
      <!-- card -->

      
      <div class="container text-center">
      <div class="row align-items-center">
      <?php 
      foreach($data as $key=>$value): 
        if($value[5]==0): ?>
        <div class="col">
          <div class="card position-relative" style="width: 18rem;">
            <img src="admin_panel/img/<?= $value[2]; ?>" class="rounded float-start" class="card-img-top" alt="<?= $value[2]; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $value[1]; ?></h5>
              <p><?= $value[4]; ?></p>
             
              <a href="details.php?id=<?= $value[0]; ?>" class="btn btn-primary">Satip aliw</a>
             
            </div>
          </div>
        </div>
        <?php endif;
  endforeach; ?>
    </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>