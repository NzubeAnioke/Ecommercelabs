<?php
// Start session
session_start();
    
require ('../functions/functions.php');
include ('../controllers/product_controller.php');

$data = getproduct($_GET['id']); 
$ip = getIPAddress();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Search result</title>
</head>
<body>

<h3 class="headstocks"> Single product </h3>
  <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">Product ID</th>
      <th scope="col">Product title</th>
      <th scope="col">Category</th>
      <th scope="col">Brand</th>
      <th scope="col">Price</th>
      <th scope="col">Decrition</th>
      <th scope="col">Image</th>
      <th scope="col">Keyword</th>
    </tr>
  </thead>  
  <tbody>
    <tr>

    </tr>
  <?php
                echo '
                <tr>
                <td>'.$data ["product_id"].'</td>
                <td>'.$data["product_title"].'</td>
                <td>'.$data ["product_cat"] .'</td>
                <td>'.$data ["product_brand"].'</td>
                <td>'.$data ["product_price"] .'</td>
                <td>'.$data["product_desc"] .'</td>
                <td>'.$data["product_image"] .'</td>
                <td>'.$data["product_keywords"] .'</td>
                <td> 
                <form class="form-inline" method="POST" action="../actions/add_to_cart.php">
                <input class="form-control mr-sm-2" type="hidden" value="'.$ip.'" name="ip">
                <input class="form-control mr-sm-2" type="hidden" value="'. $_SESSION["customer_id"].'" name="customer_id">
                <input class="form-control mr-sm-2" type="hidden" name="product_id" value =" '.$data["product_id"].'">
                <input class="form-control mr-sm-2" name="quantity" type="number" placeholder="Quantity" aria-label="Quantity">
                <input type="submit" name="submit" value="Add to Cart">
              </form>
                </td>
              </tr>             ' ; 
    

            ?>  
</body>
</html>

