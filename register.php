<html>
<body>
<h1>Registration</h1>
<form  action="" method="post">
    <table>
        <tr>
            <td>Username</td>
<td><input type="text" name="username" placeholder="Username" size="29%"/></td>
</tr>
    <tr>
            <td>Email</td>
<td>
<input type="email" name="email" placeholder="Email" size="29%"  />
</td>
</tr>
    <tr>
            <td>Password</td>
<td>
<input type="password" name="password" placeholder="Password"  size="29%"/></td>
</tr>
<tr>
            <td>Date</td>
<td>
<input type="datetime-local" name="date">
</td>
</tr>
<tr>
    <td>
<input type="submit" name="submit" value="Register"  />
</td></tr>
</form>
<?php
if (isset($_POST['submit'])) {
        $con=mysqli_connect("localhost:3306","root","","test") or die(mysqli_error());
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];                
       // $india="SET time_zone = 'IST'"; 
 //$timestamp =date('Y-m-d H:i:s IST');
        //$date = date('m/d/Y h:i:s', time());
        $timestamp = $_POST['date'];
           /* move_uploaded_file($_FILES['ebook']['tmp_name'],"images/".$_FILES['ebook']['name']);
            $b_pdf = "images/".$_FILES['ebook']['name'];    
*/              
        $qry="insert into hello(username,email,password,datetime)values('$username','$email','$password','$timestamp')";
        $result=mysqli_query($con,$qry);
        if ($result) {
                
                 echo "Account Created Successfully";
                 header("Location:login.php");                
      
                     }                                   
                                                          
        	else                                                                        
        	{                                          
        	   	echo "Failure".mysqli_error($con);
        	                                              
            }

}
?>
</body>
</html>