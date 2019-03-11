<?php
include('connection.php');
$qry="DELETE FROM ami WHERE id='$_GET[id]'";
$result=mysqli_query($con,$qry);
if($result)
{
	header('location:index.php');
}
?>