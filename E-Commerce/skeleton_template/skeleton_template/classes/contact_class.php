<?php
//contact phone entity
require('../settings/db_class.php');



/**
 * 
 */
class ContactPhoneClass extends db_connection{
    //add, edit, delete
    function addContact_cls($itemone, $itemtwo){

    }
    //add, edit, delete
    function selectOneContact_cls($itemid){

    }
     //add, edit, delete
     function selectAllContact_cls($itemone, $itemtwo){
        //write the sql
        $sql = "SELECT FROM phonebook";

        //execute the sql
        return $this->db_query($sql);

        //fetch
        
    }

    //add, edit, delete
    function editContact_cls($itemid, $newitemone, $newitemtwo){

    }
    //add, edit, delete
    function deleteContact_cls($itemid){

    }
}

?>