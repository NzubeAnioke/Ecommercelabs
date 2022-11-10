<?php
//connect to the user account class
include dirname(__FILE__)."/../classes/product_class.php";

//BRANDS
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


//PRODUCTS
//--INSERT--//
function insertproduct($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords){
    $newdata = new AddCAT();
     return $newdata->addproduct($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords);
}


//--SELECT--//
function getproducts(){
    $newdata = new AddCAT();
    return $newdata->selectproducts();  
}

function getproduct($id){
    $newdata = new AddCAT();
    return $newdata->selectproduct($id);  
}

//--UPDATE--//
function updateproduct($product_id, $product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords){
    $newdata = new AddCAT();
    return $newdata->updateproduct($product_id, $product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords);
}

//Product search
function searchproduct($product_keywords){
    $newdata = new AddCAT();
    return $newdata-> searchproduct($product_keywords);  
}