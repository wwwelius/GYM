<?php
$con = mysqli_connect("localhost","root","","gym");
$a = $_POST['name'];
$b = $_POST['number'];
$c = $_POST['email'];
$d = $_POST['age'];
$e = $_POST['gender'];
$f = $_POST['nid'];
$g = $_POST['address'];
$h = $_POST['bill'];


$sql = "INSERT INTO membership (Name, Phone, Email, Age, Gender, NID, Address, Bill) VALUES('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h')";
mysqli_query($con,$sql);
echo "Successfully Done";


?>