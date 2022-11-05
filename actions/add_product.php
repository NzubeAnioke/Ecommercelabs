<?php

include ('../controllers/product_controller.php');
// check if button is clicked
if(isset($_POST["product"])){
    // grab form data
    $product_cat = $_POST["product_cat"];
    $product_brand = $_POST["product_brand"];
    $product_title = $_POST["product_title"];
    $product_price = $_POST["product_price"];
    $product_desc = $_POST["product_desc"];
    $product_image = $_POST["product_image"];
    $product_keywords = $_POST["product_keywords"];




//db insertion
    $result = insertproduct($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords);
    if ($result) {
        echo "Inserted succesfully";
        session_start();
        $_SESSION["product_rst"] = true;
        header("location: ../view/product.php");
    } else {
        echo "Insertion failed";
    }
}

?>