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

     function insert_pay_cls($amount, $email){
      $sql = "INSERT INTO `pay`(`email`,`amount`) VALUES ('$email','$amount')";
          
      return $this->db_query($sql);
   
    
      }
   
      function insert_payment_cls($amount, $customer_id,$order_id,$currency,$p_date){
       $sql = "INSERT INTO `payment`( `amt`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES ('$amount','$customer_id','$order_id','$currency','$p_date')";
           
       return $this->db_query($sql);
    
     
       }
   
   
      function insert_order_cls( $customer_id,$invoice_no,$order_date,$order_stat){
       $sql= "INSERT INTO `orders`( `customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$customer_id','$invoice_no','$order_date','$order_stat')";
       return $this->db_query($sql);
       }
   
       function get_last_order_cls($invoice){
       $sql ="SELECT * FROM `orders` WHERE `invoice_no`= '$invoice'";
       $data =$this->db_fetch_one($sql);
       return $data;
       }
   
       function select_cart_user_cls($customer_id){
           $sql = "SELECT * FROM `cart`  WHERE `c_id` = '$customer_id' ";
         $data =$this->db_fetch_all($sql);
           return $data;
           
       }
   
       function insert_order_details_cls($order_id,$product_id,$qty){
           $sql= "INSERT INTO `orderdetails`(`order_id`, `product_id`, `qty`) VALUES ('$order_id','$product_id','$qty')";
           return $this->db_query($sql);
       }
   
       function delete_user_from_cart_cls($customer_id){
           $sql = "DELETE FROM `cart` WHERE `c_id`='$customer_id'";
           return $this->db_query($sql);
       }

       function get_user_cls($cid){
         $sql = "SELECT * FROM customer WHERE customer_id = '$cid' LIMIT 1";
         $data =$this->db_fetch_one($sql);
   
         return $data;
   }
}