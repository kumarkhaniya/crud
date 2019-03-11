<?php
include('connection.php');
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(!empty($username) && !empty($password))
	{
		$q="UPDATE ami SET username='$username',password='$password',password='$password' WHERE id='$_GET[id]'";
		$b=mysqli_query($con,$q);
		if($b)
		{
			header("index.php");
		}
	}
	else
	{
		echo "<script type='text/javascript'>alert('fill the details');</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
	<table border="1">
		<tr>
			<th>username</th>
			<td><input type="text" name="username" require/></td>
		</tr>
		<tr>
			<th>password</th>
			<td><input type="text" name="password" require/></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</form>
<h2><a href="index.php">back</a></h2>
</body>
</html>