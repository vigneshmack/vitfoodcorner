<?php
include 'connect.php';
 $conn=connection();
$name=$_POST['name'];
$token=$_POST['token'];
$query="INSERT INTO `fcmtoken` (`name`, `token`) VALUES ('".$name."', '".$token."')";
$result=mysqli_query($conn,$query);
if($result)
{
	echo "successfully";
}
else
{
	echo "failed";
}
 ?>
