<?php
if (isset($_POST['sbmt'])) {
	
	$con=mysqli_connect("localhost:3306","root","","test") or die(mysqli_error());
    $id=$_POST['id'];
    $newp=$_POST['newp'];
    $cnfp=$_POST['cnfp'];
    if ($newp == $cnfp) {
    	
    	$sql="UPDATE hello set password='".$newp."' where id='".$id."'";
    	$query=mysqli_query($con,$sql);
    	if ($query) {
    		

    		header("LOCATION:login.php");                
    	}
    }                                                 
    else
    {
    	echo "<html>";
    	echo "<body>";
    	echo "<center>";
    	echo "<h1 style='color:blue'>";
    	echo "Not Match new and confirm password".mysqli_error($con);
        echo "</h1>";                            
        echo "</center>";                       
    	echo "</body>";
    	echo "</html>";                               
    }                                             
}