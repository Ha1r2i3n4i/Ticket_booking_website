<?php 
$n=$_POST['name']; 
$c=$_POST['phone']; 
$b=$_POST['email']; 
$d=$_POST['address']; 
$con=mysqli_connect("localhost","root","","ticket"); 
$sql="INSERT INTO customerdetails(customer_name,customer_phone,customer_email,customer_address) values('$n','$c','$b','$d')"; 
$r=mysqli_query($con,$sql);
 if($r) { 
echo " EMPLOYEE DETAILS ADDED SUCESSFULLY"; } 
else { echo "details not added"; } ?>