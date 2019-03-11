
<?php
session_start(); 
?>
<html>
<body>
<h1>Login</h1>
<form  action="finalchange.php" method="post">
<table>
<tr><td><input type="text" name="id" placeholder="Id" value="<?php echo $_SESSION['idd'] ?>" readonly /></td></tr>
<tr><td><input type="email" name="email" placeholder="Email" value="<?php echo $_SESSION['pwd'] ?>" readonly/></td></tr>
<tr><td><input type="text" name="password" placeholder="old password" value="<?php echo $_SESSION['amish'] ?>" readonly /></td></tr>


<tr><td><input type="password" name="newp" placeholder="New Password"  /></td></tr>
<tr><td><input type="password" name="cnfp" placeholder="Confirm Password"  /></td></tr>
<tr><td><input type="submit" name="sbmt" value="Change" /></td></tr>
</table>
</form>
</body>
</html>