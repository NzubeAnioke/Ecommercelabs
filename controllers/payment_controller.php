<?php
//connect to the user account class
include("../classes/cart_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}


function insertData($amount, $email)
{
  $insert_contr= new CART ();

  $insert_contr->insert_pay_cls($amount, $email);
}
//--INSERT--//

//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>