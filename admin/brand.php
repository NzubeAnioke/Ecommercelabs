<?php
// Start session
session_start();

// Check do the person not logged in
if ($_SESSION['logged'] == false) {
    header('location: ../index.php');
}
// Check if the user is not an admin 
if ($_SESSION['checkrole'] != 1) {
    header('location: ../index.php');
}

if (isset($_SESSION["brand_rst"])) {
    if ($_SESSION["brand_rst"]) {
        echo "<script>alert('Brand added successfully')</script>";
        unset($_SESSION["brand_rst"]);
    }
}

if (isset($_SESSION["brand_upt"])) {
    if ($_SESSION["brand_upt"]) {
        echo "<script>alert('Brand updated successfullt')</script>";
        unset($_SESSION["brand_upt"]);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form method="POST" action="../actions/add_brand.php">
        <div class="form-outline mb-4">
            <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="Brandname" required />
            <label class="form-label" for="form3Example3cg">Enter brand name</label>
        </div>


        <div class="d-flex justify-content-center">
            <button type="submit" name="brand" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Add</button>
        </div>

    </form>
    <br>
    <h2> Brands </h2>

  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Brands</th>
        <th scope="col">Update action</th>
      </tr>
      <?php
        include dirname(__FILE__)."/../controllers/product_controller.php";
        $data = getBrands();
        foreach($data as $key => $value) {
            echo '<tr>
                    <td>
                        '. $value["brand_name"] .'        
                    </td>
                    <td>
                        <form action="../actions/update_brand.php" method="POST">
                            <input type="text" name="newbrand" required>
                            <input type="hidden" name="brand_id" value="'. $value['brand_id'] .'" required>
                            <input type="submit" name="update_brand">
                        </form>
                    </td>
                </tr>';
        }
      ?>
    </thead>
    <tbody>

   
    </tbody>
  </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>