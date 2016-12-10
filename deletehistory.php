<?php
$dl=$_POST['deleteall'];
include 'connect.php';
$con=connection();
if(!$con)
{
	echo "NOT CONNECTED";
}
else
{
	echo "CONNECTED";
}
if($dl=="DELETEALL")
{
$ab="DELETE FROM androidappitems WHERE 1";
$ac=mysqli_query($con,$ab);
if($ac)
{
	echo "TABLE DELETED SUCCESSFULLY";
}
else
{
	echo "TABLE NOT DELETED";
}	
}
else
{
	echo "ID IS NOT CORRECT";
}
?>
