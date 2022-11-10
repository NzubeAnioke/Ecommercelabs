<?php

include dirname(__FILE__).'/../controllers/cart_controller.php';
// check if button is clicked
if(isset($_POST["submit"])){
    // grab form data
    $ip = $_POST["ip"];
    $customer_id = $_POST["customer_id"];
    $product_id = $_POST["product_id"];
    $quantity = $_POST["quantity"];

    $duplicate_check = viewcart($product_id,$customer_id);
    if ($duplicate_check == false)
        addCart($product_id, $ip, $customer_id, $quantity);
    else {
        $quantity = $quantity + $duplicate_check["qty"];
        updateCart($product_id, $customer_id, $quantity);
    }

    header("location: ../view/all_product.php");
    
}


?>