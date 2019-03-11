<?php
session_start();
if (!isset($_SESSION['amish'])) {
header("Location:login.php");
}
else
{

	?>
	<html>
	<head>
	</head>
	
	<body>
	<h1>Welcome </h1>
	<p>Welcome Login Page</p>
	<?php echo "welcome " . $_SESSION['amish']; ?><br>
	<a href="logout.php">Logout</a>
	</body>
	</html>
	<?php
}
?>
