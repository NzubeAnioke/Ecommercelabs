<?php
//make the controller aware of the existence of the class
require ('../classes/contact_class.php');

//edit, select, update, delete function
function addContact_ctr($a, $b){
    //createan instance of the clss
    $add_item = new ContactPhoneClass();
     return addContat_cls($a, $b);


}

?>