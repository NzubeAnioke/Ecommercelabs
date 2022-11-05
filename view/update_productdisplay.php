<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> PRODUCTS </h2>

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
</body>
</html>
