<?php

include dirname(__FILE__).'/../controllers/product_controller.php';
// check if button is clicked
if(isset($_POST["product"])){
    // grab form data
    $product_cat = $_POST["product_cat"];
    $product_brand = $_POST["product_brand"];
    $product_title = $_POST["product_title"];
    $product_price = $_POST["product_price"];
    $product_desc = $_POST["product_desc"];
    $product_keywords = $_POST["product_keywords"];

    $imgfolder = ".\\..\\images\\product\\";

    $upload_imgfolder = "./../images/product/";

    $product_image = $_FILES["product_image"];

    $file_dest = $imgfolder . basename($product_image["name"]);

    $upload_file_dest = $upload_imgfolder . basename($product_image["name"]);

    $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

move_uploaded_file($product_image["tmp_name"], $file_dest);




//db insertion
    $result = insertproduct($product_cat,$product_brand,$product_title,$product_price,$product_desc,$upload_file_dest,$product_keywords);
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