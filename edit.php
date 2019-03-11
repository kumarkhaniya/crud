<?php
// including the database connection file
include_once("config.php");
//$con=mysqli_connect("localhost:3306","root","","test") or die(mysqli_error());


if(isset($_POST['update']))
{    
    $id = $_POST['id'];
  $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
      
        $timestamp = $_POST['date'];
    
    // checking empty fields
    /*if(empty($username) || empty($email) || empty($password)) || empty($timestamp))
    {            
        if(empty($username)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        
        if(empty($password)) {
            echo "<font color='red'>Password field is empty.</font><br/>";
        }  
        if(empty($timestamp)) {
            echo "<font color='red'>Date field is empty.</font><br/>";
        }        
          
    } else {    */
        //updating the table
        $result = mysqli_query($con, "UPDATE hello SET username='$username',email='$email',password='$password',datetime='$timestamp' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: display.php");
 /*   }
}*/
}
?>

<?php
//getting id from url
$id =$_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM hello WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    
        $username=$res['username'];
        $email=$res['email'];
        $password=$res['password'];                          
}                                                                       
?>                                                       
<html>                                                    
<head>                                             
    <title>Edit Data</title>                           
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
        <tr> 
                <td>ID</td>
                <td><input type="text" name="id" value="<?php echo $id;?>" readonly></td>
            </tr>
            <tr> 
                <td>Name</td>
                <td><input type="text" name="username" value="<?php echo $username;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="password" value="<?php echo $password;?>"></td>
            </tr>
            <tr> 
                <td>Date</td>
                <td><input type="datetime-local" name="date" ></td>
            </tr>
            <tr>
               <!--  <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                --> <td><input type="submit" name="update" value="Update" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">></td>
            </tr>
        </table>
    </form>
</body>
</html>