<?php
//connect to the user account class
include("../classes/product_class.php");

//CATEGORIES
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
//CATEGORIES
//--INSERT--//
function insertCAT($cat){
    $newdata = new AddCAT();
     return $newdata->addCAT($cat);
}


//--SELECT--//
function getCAT(){
    $newdata = new AddCAT();
    return $newdata->selectCAT();  
}

//--UPDATE--//
function updateCAT($id,$cat){
    $newdata = new AddCAT();
    return $newdata->updateCAT($id,$cat);
}