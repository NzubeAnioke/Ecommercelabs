<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data

//--INSERT--//
function insertCustomer($fullname, $email, $password ,$country , $city, $number, $usr_role = 2){
    $newdata = new CustomerClass();
     return $newdata->addCustomer($fullname, $email, $password ,$country , $city, $number, $usr_role);
}

function checkEmail ($email){
//Verify if email exists in the database
    $newdata = new CustomerClass ();
    $select = $newdata-> verifyemail($email);
    // = $newdata->db_fetch_one($select)
    if(empty($select))
        return true;
    else
        return false;
    }

// Comparing emails 
function Checklogin ($email, $password){
    $newdata = new CustomerClass ();
    $query= $newdata-> checklogin ($email, $password);
    return $query;
    if(!empty($query)) 
        return true;
    else
        return false;
    }
?>

