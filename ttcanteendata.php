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
$ab="select * from  ttadditems;";
$ans=mysqli_query($con,$ab);
$j=array();
while($a=mysqli_fetch_array($ans))
{
	array_push($j,array("itemname"=>$a[1],"category"=>$a[2],"itemtype"=>$a[3],"price"=>$a[4],"photo"=>'<img src="data:image/jpeg;base64,'.base64_encode($a['photo']).'" height="100" width="100"/>'));
}
echo json_encode(array("FOOD"=>$j));
mysqli_close($con);
?>