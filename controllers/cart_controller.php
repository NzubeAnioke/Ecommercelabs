<?php
//connect to the cart class
include dirname(__FILE__)."/../classes/cart_class.php";


//CART
//--VIEW CART--//
function viewcart($product_id,$customer_id){
    $newdata = new CART();
     return $newdata->viewcart($product_id,$customer_id);
}

function viewCustomercart($customer_id){
    $newdata = new CART();
     return $newdata->viewCustomercart($customer_id);
}

function viewCustomerItems($customer_id){
    $newdata = new CART();
     return $newdata->viewCustomerItems($customer_id);
}

//ADD TO CART
function addcart($product_id,$ip,$customer_id,$quantity){
    $newdata = new CART();
     return $newdata->addcart($product_id,$ip,$customer_id,$quantity);
}


//DELETE 
function removecart($product_id,$customer_id){
    $newdata = new CART();
     return $newdata->removecart($product_id,$customer_id);
}

//UPDATE 
function updateCart($product_id,$customer_id,$quantity){
    $newdata = new CART();
     return $newdata->updateCart($product_id,$customer_id,$quantity);
}

?>