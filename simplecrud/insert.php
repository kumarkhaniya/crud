<?php
include('connection.php');
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	if(!empty($username) && !empty($password))
	{
		$password=md5($password);
		$qry="INSERT INTO ami(username,password)VALUES('$username','$password')";
		$result=mysqli_query($con,$qry);
	}
	else
	{
		echo "<script type='text/javascript'>alert('fill the field');</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><center>
	<form action="" method="POST">
		<table border=1>
			<tr>
				<th>username</th>
				<td><input type="text" name="username"  required/></td>
			</tr>
			<tr>
				<th>password</th>
				<td><input type="text" name="password"  required/></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
		<h1><a href="index.php">back</a></h1>
	</form>
</center>

</body>
</html>