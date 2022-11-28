<?php

session_start();

include ("../controllers/cart_controller.php");
$email=$_POST['email'];
$amount= $_POST['amount'];

$ref = $_POST['ref'];

$response= $_POST['res'];

//generates the invoice id
$invoice= mt_rand();

if ($response == "success"){
  //insert into the order table
  insert_order_ctr($_SESSION['customer_id'],$invoice,date("Y/m/d"),$response);

  //get the last oder details
  $data= get_last_order_ctr($invoice);

  //insert intp tp the payment table
  insert_payment_ctr($amount, $_SESSION['customer_id'],$data['order_id'],'GHS',date("Y/m/d"));

  //select all the user cart data
  $val=select_cart_user_ctr($_SESSION['customer_id']);

  //loop through the arrayand insert into the order table
  foreach ( $val as $v) {
    insert_order_details_ctr($data['order_id'],$v['p_id'],$v['qty']);
    

  }
  //delete from the cart table
  delete_user_from_cart_ctr($_SESSION['customer_id']);
 


}else{

}

$url = "https://api.paystack.co/transaction/initialize";
$fields = [
  'email' => $email,
  'amount' =>  $amount
];
$fields_string = http_build_query($fields);
//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: sk_test_57625a96c308e8eacdccf1ceb20175b5f1a3c054",
  "Cache-Control: no-cache",
));

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$result = curl_exec($ch);
echo $result;
?>
