<!DOCTYPE html>
<html>
<body>
<?php
require("childclasses.php");
$elantra = new Elantra("Elantra","black", 115);
$elantra->message();
?>
<br>
<?php
$truck = new Truck("Truck","green", 250, 6);
$truck->result();

?>
</body>
</html>