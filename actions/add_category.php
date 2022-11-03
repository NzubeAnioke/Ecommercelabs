<?php

include ('../controllers/product_controller.php');
// check if button is clicked
if(isset($_POST["cat"])){
    // grab form data
    $cat = $_POST["catname"];



//db insertion

    $result = insertCAT ($cat);
    if ($result) {
        echo "Inserted succesfully";
        session_start();
        $_SESSION["cat_rst"] = true;
        header("location: ../admin/category.php");
    } else {
        echo "Insertion failed";
    }
}

?>
