<?php
require ('database_connection_test.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Edit Page</title>
</head>
<body>

<form method="post" action="#">
  <input type="text" name="update_value" value="
    <?php
         $EDITID=null;
         if (isset($_POST['edit'])){
             $EDITID=$_POST['NEWID'];
             // Selecting from the database
             $SELECTSQL="SELECT `Search_term` FROM `practical_lab_table` WHERE Lab_id=$EDITID";
             $SELECTResult=$conn->query($SELECTSQL);
             if ($SELECTResult->num_rows > 0) {
             while($row = $SELECTResult->fetch_assoc()) {
             echo "SearchItem: " . $row['Search_term'];
             } 
            } 
          }
    ?>
      ">
      <button name="update">Update</button>
</form>

</body>
</html>

<?php
if (isset($_POST['update'])){
    $update_new=$_POST['update_value'];
    $Update="UPDATE `practical_lab_table` SET `Search_term`='$update_new' WHERE `Lab_id`= '$EDITID'";
    $UpdateResult=$conn->query($Update);
    if($UpdateResult === True ){
        echo "Update was successfull";
    }
    else{
        echo "Update was not successful".$conn->error;
        
    }
}
?>