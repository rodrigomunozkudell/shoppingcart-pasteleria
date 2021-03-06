<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Ionicons CSS -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- App CSS -->
    <link href="css/app.css" rel="stylesheet">

    <title>Hello, world!</title>

  </head>
  <body>
    <div class="pt-5 text-center">
        <h1>Carrito de compras</h1>
    </div>

    <div class="container pt-5">
        <div class="row">

            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    <?php $productos = $_SESSION['resultado'] ?>
                    <?php foreach($productos as $producto): ?>
                        <tr>
                            <td><img src="images/<?= $producto['imagen'] ?>" width="180" alt="..."></td>
                            <td class="pt-5"><?= $producto['precio'] ?></td>
                            <td class="pt-5"><input type="text" name="cant" value="<?= $producto['cantidad'] ?>" class="form-control"></td>
                            <td class="pt-5"><?= $producto['precio'] ?></td>
                            <td class="pt-5"><button id="btn-delete" class="btn btn-danger"><i class="icon ion-md-trash"></i></button></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
              </table>
              
              

        </div>

        <a href="index.php" class="btn btn-primary">Seguir comprando</a>
        <h4 class="text-right">Total <span id="total" class="text-dark" >$300.00</span></h4>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script>
        $(function(){
            
            $(document).on("click","#btn-delete",function(){

                $(this).parent().parent().remove();

                getTotal();

            });

            $(document).on("keyup","input[name*=cant]",function(){

                var SubTutal=$(this).val()*$(this).closest("tr").find("td:eq(1)").html();
                $(this).closest("tr").find("td:eq(3)").html(SubTutal.toFixed(2));
                
                getTotal();

            }); 
            
        });

        function getTotal(){
            total=0;
            $("tbody tr").each(function(){
                total=total+Number($(this).find("td:eq(3)").html());
            });
            
            $("#total").html("$"+total.toFixed(2));
        }
    </script>
</body>
</html>