<?php

include '../controllers/cart_controller.php';
// check if button is clicked
if(isset($_POST["update_qty"])){
    // grab form data
    $ip = $_POST["ip"];
    $product_id = $_POST["product_id"];
    $customer_id = $_POST["customer_id"];
    $product_id = $_POST["product_id"];
    $quantity = $_POST["quantity"];



//db insertion

    $result = updateCart($product_id,$customer_id,$quantity);
    if ($result) {
        header("location: ../view/cart.php");
    } else {
        echo "update failed";
    }
}

?>