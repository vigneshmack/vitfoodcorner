<?php
include 'connect.php';
$con=connection();
if(!$con)
{
	//echo "ERROR OCUURED". mysqli_connect_error;
}
else
{
	//echo "connected successfully";
}
$ab="select * from  androiditems where orderstatus='waiting';";
$ans=mysqli_query($con,$ab);
$j=array();
while($a=mysqli_fetch_array($ans))
{                                                                
	array_push($j,array("id"=>$a[0],"username"=>$a[1],"itemname"=>$a[2],"quantity"=>$a[3],"price"=>$a[4],"canteen"=>$a[5],"time"=>$a[6],"status"=>$a[7],"orderstatus"=>$a[8]));
}
echo json_encode(array("FOOD"=>$j));
mysqli_close($con);
?>
