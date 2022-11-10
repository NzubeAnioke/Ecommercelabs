<?php
//contact phone entity
require dirname(__FILE__).'/../settings/db_class.php';

/**
 * 
 */
class CustomerClass extends db_connection{
    //add, edit, delete
    function addCustomer($fullname, $email, $password ,$country , $city, $number, $usr_role){
       // take a query 
       $myquery = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, 
	   `customer_country`, `customer_city`, `customer_contact`, `user_role`) 
	   VALUES ('$fullname','$email','$password','$country','$city','$number', '$usr_role')";
       // execute query
       return $this->db_query($myquery);

    }
   
   function verifyemail($email){
	// Check if email already exists
   		$select = "SELECT * FROM `customer` WHERE `customer_email` = '$email'";
   		return $this->db_fetch_one($select);

   }
   function checklogin ($email, $password){
         // select * from the database, where the email = email the user provided, fetch data and store in a variable
      $query = "SELECT * FROM `customer` WHERE `customer_email`= '$email' AND `customer_pass` = '$password' ";
      return $this->db_fetch_one($query);
   }
   
    }



    ?>