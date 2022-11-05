<?php

require('../settings/db_class.php');

/**
 * 
 */
class Addbrand extends db_connection{
    //add, edit, delete
    function addbrand($brand){
       // take a query 
       $brandquery = "INSERT INTO `brands`(`brand_name`) VALUES ('$brand')";
       // execute query
       return $this->db_query($brandquery);
    }


    function selectBrands(){
		$sql="SELECT * FROM `brands` ";
		return $this->db_fetch_all($sql);

	}

    //--UPDATE--//
	function updatebrand($id, $brand){
		$sql="UPDATE `brands` SET `brand_name`='$brand' WHERE `brand_id`='$id'";
		//exceute sql
		return $this->db_query($sql);

	}
}

class AddCAT extends db_connection{
    //add, edit, delete
    function addcat($cat){
       // take a query
       $catquery= "INSERT INTO `categories`(`cat_name`) VALUES ('$cat')";
       // execute query
       return $this->db_query($catquery);
    }


    function selectcat(){
		$sql="SELECT * FROM `categories` ";
        return $this->db_fetch_all($sql);

	}

    //--UPDATE--//
	function updatecat($id, $cat){
        $sql = "UPDATE `categories` SET `cat_name`='$cat' WHERE `cat_id`='$id'";
		//exceute sql
		return $this->db_query($sql);

	}

    //PRODUCT METHODS
    function addproduct($product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords){
        // take a query
        $productquery= "INSERT INTO `products`(`product_cat`, `product_brand`, 
        `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) 
        VALUES ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
        // execute query
        return $this->db_query($productquery);
     }
 
 
     function selectproducts(){
         $sql=" SELECT * FROM `products` ";
        return $this->db_fetch_all($sql);
     }

     function selectproduct($id){
        $sql=" SELECT * FROM `products` WHERE `product_id`='$id'";
       return $this->db_fetch_all($sql);

    }
 
     //--UPDATE--//
     function updateproduct($product_id, $product_cat,$product_brand,$product_title,$product_price,$product_desc,$product_image,$product_keywords){
         $sql = "UPDATE `products` SET `product_cat`='$product_cat',
         `product_brand`='$product_brand',`product_title`='$product_title',`product_price`='$product_price',
         `product_desc`='$product_desc',`product_image`='$product_image',`product_keywords`='$product_keywords' WHERE `product_id`= '$product_id'";
         //exceute sql
         return $this->db_query($sql);
 
     }
}
?>

