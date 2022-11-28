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

function get_user_ctr($customer_id){
    $select_contr= new CART();
    $data = $select_contr->get_user_cls($customer_id);
  
    return $data;
  
  }


function insert_order_ctr( $customer_id,$invoice_no,$order_date,$order_stat){
    $select_contr= new CART ();
    $data = $select_contr->insert_order_cls( $customer_id,$invoice_no,$order_date,$order_stat);
    return $data;
  }

  function get_last_order_ctr($invoice){
    $select_contr= new CART();
    $data= $select_contr-> get_last_order_cls($invoice);
    return $data;
  }

  function insert_payment_ctr($amount, $cid,$order_id,$currency,$p_date){
    $select_contr= new CART();
    $data= $select_contr-> insert_payment_cls($amount, $cid,$order_id,$currency,$p_date);
    return $data;
  }

  function select_cart_user_ctr($cid){
    $select_contr= new CART();
    $data= $select_contr->select_cart_user_cls($cid);
    return $data;

  }
  function insert_order_details_ctr($order_id,$product_id,$qty){
    $select_contr= new CART();
    $data= $select_contr->insert_order_details_cls($order_id,$product_id,$qty);
    return $data;
  }
  function delete_user_from_cart_ctr($customer_id){
    $select_contr= new CART();
    $data= $select_contr->delete_user_from_cart_cls($customer_id);
    return $data;
  }
?>