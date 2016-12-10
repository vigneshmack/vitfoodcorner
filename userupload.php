<?php
$no=$_POST['n'];
$name=$_POST['username'];
$item=$_POST['itemname'];
$quan=$_POST['quantity'];
$pr=$_POST['price'];
$canteen=$_POST['canteen'];
$time=$_POST['time'];
$status=$_POST['status'];
$myitem1=explode(',',$item);
$myquan1=explode(',',$quan);
$mypr1 = explode(',',$pr);
include 'connect.php';
$con=connection();
if(!$con)
{
	//echo "ERROR OCUURED". mysqli_connect_error;
}
else
{
	// echo "connected successfully"."<br>";
}
for($i=0;$i<$no;$i++)
{
	$ab="INSERT INTO androiditems VALUES (NULL,'".$name."', '".$myitem1[$i]."','".$mypr1[$i]."','".$myquan1[$i]."','".$canteen."','".$time."','".$status."','waiting')";
	$ans=mysqli_query($con,$ab);
  if($ans)
  {
	echo "SUCCESSFULLY INSERTED";
  }
 else
 {
	echo "INSERTION FAILED";
 }
}
mysqli_close($con);
?>