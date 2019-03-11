<?php
include('connection.php');
$qry="SELECT * FROM ami";
$result=mysqli_query($con,$qry);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
<table border="1" width="1000pxl">
<tr>
	<th>id</th>
	<th>username</th>
	<th>password</th>
	<th>edit</th>
	<th>delete</th>
</tr>
	<?php
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['password']."</td>";
			echo "<td><a href=edit.php?id=".$row['id'].">edit</a></th>";
			echo "<td><a href=delete.php?id=".$row['id'].">delete</a></th>";
			echo "</tr>";
		}
	}
	else
	{
		echo "<script type='text/javascript'>alert('no data found');</script>";
	}
	?>
</table>
<h1><a href="insert.php">insert</a></h1>
</form>
</body>
</html>