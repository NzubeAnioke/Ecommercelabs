<?php
//connect to the user account class
include("../classes/product_class.php");


//--INSERT--//
function insertbrand($brand){
    $newdata = new Addbrand();
     return $newdata->addbrand($brand);
}


//--SELECT--//
function getBrands(){
    $newdata = new Addbrand();
    return $newdata->selectBrands();  
}

//--UPDATE--//
function updatebrand($id,$brand){
    $newdata = new Addbrand();
    return $newdata->updatebrand($id,$brand);

}