<?php

require ("dbconnect.php");
if(isset($_GET['Submit'])) {
 $pname = $_GET["fname"];
 $phoned= $_GET["lname"];

 
 
 //INSERTION
 $insertsql= "INSERT INTO `phonebook`(`pname`, `pphoned`) VALUES ('$pname','$phoned')";
 $Inresult=$conn->query($insertsql);

      if ($Inresult === True) {
            
            echo "INSERTION DONE";
    }

    else{
        echo "INSERTION FAILED";

}

//SELECTION
$selectsql= "SELECT * FROM `phonebook`";
$selectResult=$conn->query($selectsql);
        if ($selectResult-> num_rows > 0){
            while($row = $selectResult->fetch_assoc()){
                $SEARCHID=$row['pid'];
                $phoneName=$row['pname'];
                $phoned=$row['pphoned'];
                echo "Phone Name = ". $row['pname'];
                echo "Phone Number = ". $row['pphoned'];
               echo " <br>";

  

//DELETING   
               echo "
               <form action='result_page.php'>
            <input type ='hidden' name='deletID' value='$SEARCHID'>
            <button name='delete'>Delete</button>      
            </form> 
            
            <br>";

            echo "
    <form action='edit_form.php'>
    <input type ='hidden' name='NEWID' value='$SEARCHID'>
      <button name='edit'>Edit</button>
</form>
    <br> ";
            }

        }
        else{
            echo "No result";
        }




}

?>
<?php


    if(isset($_GET['delete'])){
    $Lab_id=$_GET['deletID'];
  
  
    $DeleteData="DELETE FROM `phonebook`";
    $DELETEResult=$conn->query($DeleteData);
    if($DELETEResult === TRUE){
    echo "Deleted";
  }
    else{
    echo "Deletion Failed";
  }

}


?>
