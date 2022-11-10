<?php
include_once '../controllers/customer_controller.php';

$errors = array();


function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


// check if the login button has been clicked
if (isset($_POST["login"])) {
  // if the button has been clicked, grab the email and password
  $email = $_POST["email"];
  $password = $_POST["password"];

  if (empty($_POST['email'])) {
    $errors['emailErr'] = "email is required";
  } else {
    // $email = test_input($_POST["email"]);
  }

  if (empty($_POST['password'])) {
    $errors['passwordErr'] = "password is required";
  } else {
    // $password = test_input($_POST["password"]);
  }
  $password = base64_encode($password);
  $query = Checklogin($email, $password);

  if ($query == false) {
    $errors['loginErr'] = "Login failed";
  }

  if (count($errors) == 0) {
      echo '<script>alert("Login Successful")</script>';
      session_start();
      $_SESSION["logged"] = true;
      $_SESSION["customer_id"] = $query["customer_id"];
     
      if ($query["user_role"] == 1) 
        $_SESSION["checkrole"] = 1; //setting user role session for admin
      else 
      $_SESSION["checkrole"] = 2; //setting user role session for a normal user
      
      header('location: ../index.php');
      
    } else {
      echo '<script>alert("Login Failed")</script>';
    }
} // if empty,echo email/password is wrong
    else {
      echo 'All fields are required';
    }
?>