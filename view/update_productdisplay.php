<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
</head>
<body>

    <nav class="navbar navbar-light bg-light justify-content-between"></nav>

    

<h2> PRODUCTS </h2><br>
<div class="container">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Products</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include ("../controllers/product_controller.php");
      $data = getproducts();
      foreach($data as $key => $value) {
          echo '<tr>
                  <td>
                      '. $value["product_title"] .'        
                  </td>
                  <td>
                    <a href="update_product.php?id='. $value["product_id"] .'">Edit</a>
                  </td>
              </tr>';
      }
    ?>  
  </tbody>
</table>
</div>
</body>
</html>
