<?php
//New comment here
include dirname(__FILE__).'/../controllers/product_controller.php';
// check if button is clicked
if(isset($_POST["brand"])){
    // grab form data
    $brand = $_POST["Brandname"];



//db insertion

    $result = insertbrand ($brand);
    if ($result) {
        echo "Inserted succesfully";
        session_start();
        $_SESSION["brand_rst"] = true;
        header("location: ../admin/brand.php");
    } else {
        echo "Insertion failed";
    }
}

?>
