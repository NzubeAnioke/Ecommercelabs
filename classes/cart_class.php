<?php

require dirname(__FILE__).'/../settings/db_class.php';

class CART extends db_connection{
    //add, edit, delete
    function viewcart ($product_id,$customer_id){
       // take a query
       $cartquery= "SELECT * FROM `cart` WHERE `p_id`='$product_id' AND `c_id` = $customer_id";
       // execute query
       return $this->db_fetch_one($cartquery);
    }

    function viewCustomercart($customer_id){
      // take a query
      $cartquery= "SELECT products.product_id, products.product_title, products.product_price, cart.p_id, cart.qty, 
                  cart.c_id FROM `products` JOIN cart WHERE product_id = cart.p_id AND cart.c_id = '$customer_id'";
      // execute query
      return $this->db_fetch_all($cartquery);
   }

   function viewCustomerItems($customer_id){
      // take a query
      $cartquery= "SELECT COUNT(*) FROM cart WHERE cart.c_id = '$customer_id';";
      // execute query
      return $this->db_fetch_one($cartquery);
   }

    function addcart ($product_id,$ip,$customer_id,$quantity){
        // take a query
        $cartquery= "INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$product_id','$ip','$customer_id','$quantity')";
        // execute query
        return $this->db_query($cartquery);
     }

     function removecart ($product_id,$customer_id){
        // take a query
        $cartquery= "DELETE FROM `cart` WHERE `p_id`='$product_id' AND `c_id` = $customer_id";
        // execute query
        return $this->db_query($cartquery);
     }

     function updateCart($product_id,$customer_id,$quantity) {
         $cartquery= "UPDATE `cart` SET qty = '$quantity' WHERE p_id = '$product_id' AND c_id = '$customer_id'";
         // execute query
         return $this->db_query($cartquery);
     }
}