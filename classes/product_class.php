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
       //$catquery = "INSERT INTO `brands`(`brand_name`) VALUES ('$brand')";
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
		//$sql="UPDATE `brands` SET `brand_name`='$brand' WHERE `brand_id`='$id'";
        $sql = "UPDATE `categories` SET `cat_name`='$cat' WHERE `cat_id`='$id'";
		//exceute sql
		return $this->db_query($sql);

	}
}
?>

