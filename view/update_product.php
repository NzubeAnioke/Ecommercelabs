<?php
// Start session
session_start();

// Check do the person not logged in
if ($_SESSION['logged'] == false) {
    header('location: ../index.php');
}

if (isset($_SESSION["product_rst"])) {
    if ($_SESSION["product_rst"]) {
        echo "<script>alert('Product added successfully')</script>";
        unset($_SESSION["product_rst"]);
    }
}

if (isset($_SESSION["product_upt"])) {
    if ($_SESSION["product_upt"]) {
        echo "<script>alert('product updated successfully')</script>";
        unset($_SESSION["product_upt"]);
    }
}

include ('../controllers/product_controller.php');
$data = getCAT();   
$Branddata = getBrands();
// $product = getproduct($_GET["id"]);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nzube Ecommerce Labs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="container">
    <form method="POST" action="../actions/update_product.php" enctype="multipart/form-data">
                <label for="CATEGORIES">Choose a product category:</label>
            <select name="product_cat" id="cat_name">
            <option value=""> </option>
            <?php
            foreach($data as $key => $value) {
                echo '<option value="' .$value["cat_id"] . '">'. $value["cat_name"] .'</option>'; 
            }
?>
          
            </select>
            <br><br>
            <label for="BRAND">Choose a product brand:</label>
            <select name="product_brand" id="brand_name">
            <option value=""> </option>
        
            <?php
            foreach($Branddata as $key => $value) {
                echo '<option value="' .$value["brand_id"] . '">'. $value["brand_name"] .'</option>'; 
            }

            ?>  
            </select>    
<br>  <br><br>
        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Enter product name</label>
            <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="product_title"  required />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Enter product price</label>
            <input type="number" id="form3Example3cg" class="form-control form-control-lg" name="product_price" required />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Enter product description</label>
            <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="product_desc" required />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Upload product image</label>
            <input type="file" id="form3Example3cg" class="form-control form-control-lg" name="product_image"  />
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3cg">Enter product keyword</label>
            <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="product_keywords" required />
        </div>
            <input type="hidden" name="product_id" value="<?php echo $_GET["id"] ?>">
        <div class="d-flex justify-content-center">
            <button type="submit" name="update_product" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Edit Product</button>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>