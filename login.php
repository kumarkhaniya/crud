<html>
<body>
<center>
<h1>Login Demo</h1>
<form  action="" method="post">
<table border="1" width="50%">
<tr><td>
<input type="text" name="username" placeholder="Username" size="100px" /></td></tr>

<tr><td><input type="password" name="password" placeholder="Password" size="100px" /></td></tr>
<tr><td><input type="submit" name="submit" value="Register" /></td></tr>
</table>
</form>

<table>
<tr><td><a href="forgot.php">Forgot Password ?</a></td></tr></table>
<tr><td><a href="change.php">Change Password ?</a></td></tr></table>
<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        # code...
    
        $con=mysqli_connect("localhost:3306","root","","test") or die(mysqli_error());
        $username=$_POST['username'];
        
        $password=$_POST['password'];

        $qry="select * from hello where username='".$username."' and password='".$password."'";
        $jen=mysqli_query($con,$qry);
        
        $numrows=mysqli_num_rows($jen);
        if ($numrows !=0) {
            while ($row=mysqli_fetch_assoc($jen)) {

                $user=$row['username'];
                $password=$row['password'];
            }

            if ($user==$username && $password==$password) {

                session_start();
                $_SESSION['amish']=$user;
                header("Location: welcome.php");
            }
        }
        else
        {

            echo "Invalid password";
        }
    }
    else
    {
        echo "Required";
    }
}
?>
</center>
</body>
</html>