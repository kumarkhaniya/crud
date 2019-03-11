<?php
$con=mysqli_connect("localhost:3306","root","","test") or die(mysqli_error());

$sql = 'SELECT * FROM hello';  
$retval=mysqli_query($con, $sql);  
echo "<table border=1 width=50% cellpadding=6>";
 
  echo "<tr><th>Id</th><th>UserName</th><th>Email</th><th>Password</th><th>Datetime</th><th>Edit</th><th>Delete</th></tr>";
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo "<tr>";
 echo "<td>".$row['id']."</td>";
    echo "<td>".$row['username']."</td>";
 
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['password']."</td>";
    echo "<td>".$row['datetime']."</td>";
     echo "<td><a href=\"edit.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to edit?')\">Edit</a> </td>";
     echo "<td> <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";  
 
    //echo "<td>".$row['address']."</td>";
 
    echo "</tr>";
 
 } //end of while  
}else{  
echo "0 results";  
}  echo "</table>";  
 //mysqli_close($con);
?>
