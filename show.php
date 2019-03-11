<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
<h1 style="color:blue">Show Your Password Is Here</h1><br>
<h1 style="color:red"><?php echo $_SESSION['amish']; ?></h1></center>


</body>
</html>
