<?php
if (isset($_POST['sbmt'])) {
	$con=mysqli_connect("localhost:3306","root","","test") or die(mysqli_error());

$email=$_POST['email'];
//$id=$_GET['id'];
$sql = "SELECT * FROM hello where email='".$email."'";  
$jen=mysqli_query($con, $sql);
$r=mysqli_num_rows($jen);
        
            while ($row=mysqli_fetch_array($jen)) {

              /*  $email=$row[2];
                $id=$row[0];
                $pass=$row[3];*/
                //echo $row[0];
                $id=$row[0];
                $email=$row[2];
                $pass=$row[3];
                session_start();
                $_SESSION['amish']=$pass;
                $_SESSION['pwd']=$email;
                $_SESSION['idd/']=$id;
              //  header("LOCATION:show.php");
                header("LOCATION:changepass.php ");
                
            }

          /*  if ($email==$email) {

                session_start();
                $_SESSION['amish']=$pass;
                header("Location: welcome.php");
            }*/


}
?>