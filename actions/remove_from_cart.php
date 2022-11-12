<?php

include '../controllers/cart_controller.php';
// check if button is clicked
if(isset($_POST["submit"])){
    // grab form data
    $product_id = $_POST["product_id"];
    $customer_id = $_POST["customer_id"];



//db deletion

    $result = removecart ($product_id,$customer_id);
    //echo $result;

    if ($result) {
        header("location: ../view/cart.php");
    } else {
        echo "Unable to Delete";
    }
}



?>