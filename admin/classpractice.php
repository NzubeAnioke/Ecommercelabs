
//FILE UPLOAD HTML
<input type="file" name="product_image" accept="image/*"><br><br>

In the form action add enctype="multupart/form-data"

<?php
//use a http request to capture image file - use get for image transfer/file upload
$variablename = $_FILES['product_image']['tmp_name'];

    
    ?>