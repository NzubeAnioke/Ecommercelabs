<?php

include dirname(__FILE__).'/../controllers/product_controller.php';
// check if button is clicked
if(isset($_POST["update_brand"])){
    // grab form data
    $brand = $_POST["newbrand"];
    $id = $_POST["brand_id"];



//db insertion

    $result = updatebrand($id ,$brand);
    if ($result) {
        session_start();
        $_SESSION["brand_upt"] = true;
        header("location: ../admin/brand.php");
    } else {
        echo "Insertion failed";
    }
}

?>