<?php
include("config.php");
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($con, "DELETE FROM hello WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header("Location:display.php");
?>
	