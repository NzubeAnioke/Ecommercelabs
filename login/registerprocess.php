<?php

//connect to database class
require_once '../controllers/customer_controller.php';

// keeping track of errors
$errors = array();


// check if button is clicked
if(isset($_POST["register"])){
    // grab form data
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $number = $_POST["number"];


// encrypt password
$password = base64_encode($password);


//db insertion
    $result = insertCustomer($fullname, $email, $password ,$country , $city, $number);
    if ($result) {
        echo "Inserted succesfully";
        header("location: login.php");
    } else {
        echo "Insertion failed";
    }
}
    
?>