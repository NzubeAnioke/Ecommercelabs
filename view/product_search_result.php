<?php
include ('../controllers/product_controller.php');
$data = searchproduct($_GET['search']);   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Single product</title>
</head>
<body>

<h3 class="headstocks"> Search result </h3>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Product title</th>
      <th scope="col">Price</th>
      <th scope="col">image</th>
      <th scope="col">View Product</th>
    </tr>
  </thead>  
  <tbody>
    <tr>

    </tr>
  <?php
            foreach($data as $key => $value) {
                echo '
                <tr>
                <td>' .$value["product_title"] . '</td>
                <td>' .$value["product_price"] . '</td>
                <td>' .$value["product_image"] . '</td>
                <td>  <button><a href="single_product.php?id=' .$value["product_id"] . '">View</a></button> </td>
                <td> <button>Add to cart</button> </td>
              </tr>               ' ; 
            }

            ?>  
    
  </tbody>
</body>
</html>

