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

    <form action="../controller/add.php" method="POST" enctype="multipart/form-data" class="was-validated">
  <div class="mb-3">
    <label for="validationTextare" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="validationTextare" required>
    
  </div>

  <div class="mb-3">
    <label for="validationTextar" class="form-label">Price</label>
    <input type="number" name="price" class="form-control" id="validationTextar" required>
    
  </div>

  <div class="mb-3">
  <label for="validationTexta" class="form-label">IMG</label>
    <input type="file" name="img" class="form-control" aria-label="file example" required>
  </div>

  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Preloader</label>
    <textarea name="text" name="text" class="form-control" id="validationTextarea" required></textarea>
    
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" type="submit" >Saqlash</button>
  </div>
  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>