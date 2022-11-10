<?php
    session_start();
    include dirname(__FILE__)."/../controllers/cart_controller.php";
    require dirname(__FILE__)."/../functions/functions.php";
    $allp = viewCustomercart($_SESSION["customer_id"]);
    $ip = getIPAddress();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

  <!-- ======= Header ======= -->
  
  
  <nav class="navbar navbar-light bg-light justify-content-between">
      <button type="button" onclick="window.location.href='all_product.php'" class="btn btn-warning">CONTINUE SHOPPING</button><br>
      <button type="button" onclick="window.location.href='../index.php'" class="btn btn-success">PROCEED TO PAYMENT</button>
      <header id="header" class="fixed-top d-flex align-items-center header-transparent">
          <div class="container d-flex align-items-center">
              </header>
        </nav>






  <h3 class="headstocks"> CART </h3>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total cost</th>
      <th scope="col">Manage Quantity</th>
      <th scope="col">Remove From Cart</th>
    </tr>
  </thead>  
  <tbody>
  <?php
            foreach($allp as $key => $value) {
                echo '
                <tr>
                <td>' .$value["product_title"] . '</td>
                <td>' .$value["product_price"] . '</td>
                <td><img src="' .$value["qty"] . '" alt=""></td>
                <td>'. $value["qty"] * $value["product_price"] .' </td>
              <td>
                <form class="form-inline" method="POST" action="">
                  <input class="form-control mr-sm-2" type="hidden" value="'.$ip.'" name="ip">
                  <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["customer_id"].'" name="customer_id">
                  <input class="form-control mr-sm-2" type="hidden" name="product_id" value =" '.$value["product_id"].'">
                  <input class="form-control mr-sm-2" name="quantity" type="number" placeholder="Quantity" aria-label="Quantity">
                  <input type="submit" name="submit" value="Update Quantity">
                </form>
              </td>
              <td>
              <form class="form-inline" method="POST" action="">
                  <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["customer_id"].'" name="customer_id">
                  <input class="form-control mr-sm-2" type="hidden" name="product_id" value =" '.$value["product_id"].'">
                  <input type="submit" name="submit" value="Remove">
                </form>
              </td>
                <br>

                
              </tr>               ' ; 
            }

            ?>
</body>
</html>