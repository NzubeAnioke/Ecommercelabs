
<?php
    
    include ('../controllers/product_controller.php');
    $allp = getproducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL PRODUCTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

  <!-- ======= Header ======= -->

<form class="form-inline" action="product_search_result.php">
  <input class="form-control mr-sm-2" name="search" type="text" placeholder="SEARCH" aria-label="Search">
  <br>
  <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type= "submit"  >Search</button>
</form>
</nav>


  <button type="button" onclick="window.location.href='../index.php'" class="btn btn-warning">BACK TO HOME</button>
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

    <nav class="navbar navbar-light bg-light justify-content-between">




  </header>

  <h3 class="headstocks"> AVAILABLE PRODUCTS </h3>
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
            foreach($allp as $key => $value) {
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
</table>

      