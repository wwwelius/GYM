<?php
$con = mysqli_connect("localhost","root","","logn");
$a = $_POST['Id'];
$b = $_POST['Pass'];

$sql = "insert into account (Id, Password) values('$a', '$b')";
mysqli_query($con,$sql);
echo "Successfully Done";
?>
