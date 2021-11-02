<?php
error_reporting(0);
?>
<html>
<body>

    <form action="upload2.php" method="post" enctype="multipart/form-data">
       <br> Name<input type="text" name="name" required=""><br>
        <br> price<input type="text" name="price" required=""><br>
        <br> details<input type="text" name="details" required=""><br>
        <input type="file" name="uploadfile" required="">
        <input type="submit" name="submit" value="Upload">
    
    </form>
    
</body>
</html>
<?php

/*echo "<img src='$folder'>";*/
?>

