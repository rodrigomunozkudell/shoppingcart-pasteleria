<?php include_once 'bbdd.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Ionicons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- App CSS -->
    <link href="css/app.css" rel="stylesheet">
    <title>Hello, world!</title>
  </head>
  <body>
      <div class="pt-5 text-center">
        <h1>Pastelería</h1>
      </div>
      <div class="container pt-5">
          <div class="row">
            <?php $resultados = mysqli_query($conexion, 'select * from productos'); ?>
            <?php foreach($resultados as $resultado): ?>
              <div class="col-sm-3">
                <div class="card">
                    <img src="images/<?= $resultado['imagen'] ?>" class="card-img-top" height="200" alt="200">
                    <div class="card-body">
                      <h5 class="card-title"><?= $resultado['nombre'] ?></h5>
                      <p class="card-text">$<?= $resultado['precio'] ?></p>
                      <a href="redirect.php?id=<?= $resultado['id'] ?>" class="btn btn-primary"><i class="icon ion-md-cart"></i></a>
                    </div>
                  </div>
              </div>
            <?php endforeach ?>

          </div>

      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    
    -->
  </body>
</html>