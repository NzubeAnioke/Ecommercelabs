<?php

include ('../controllers/product_controller.php');
// check if button is clicked
if(isset($_POST["update_cat"])){
    // grab form data
    $cat = $_POST["newcat"];
    $id = $_POST["cat_id"];



//db insertion

    $result = updateCAT($id ,$cat);
    if ($result) {
        session_start();
        $_SESSION["cat_upt"] = true;
        header("location: ../admin/category.php");
    } else {
        echo "Insertion failed";
    }
}

?>