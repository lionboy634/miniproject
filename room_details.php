<?php
error_reporting(1);
include('includes/config.php');
if(isset($_POST['submit'])){
    echo "shit";
}
?>



<form action="" method="post">
    <div>
    name <input type="text" name="name">
    </div>
   
    <div>
    pass <input type="text" name="age">
    <input type="submit" name="submit" value="insert">
</div>
</form>