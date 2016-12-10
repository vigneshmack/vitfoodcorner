<?php
$da=$_POST['id'];
$ida=$_POST['name'];
include 'connect.php';
$con=connection();
if(!$con)
{
	echo "ERROR OCUURED". mysqli_connect_error;
}
else
{
	echo "connected successfully";
}
$ax="select * from  androiditems where id='".$da."';";
$aq=mysqli_query($con,$ax);
while($r=mysqli_fetch_array($aq))
{
	$iden=$r['id'];
	$customer=$r['username'];
	$itemn=$r['itemname'];
	$quan=$r['quantity'];
	$pr=$r['price'];
	$can=$r['canteen'];
	$tim=$r['time'];
	$st=$r['status'];
	$os=$r['orderstatus'];	
}
$ax1="INSERT INTO androidappitems values('".$iden."','".$customer."','".$itemn."','".$quan."','".$pr."','".$can."','".$tim."','".$st."','".$os."')";
$aq1=mysqli_query($con,$ax1);
if($aq1)
{
	echo "DATA INSERTED IN ANDRIODAPPITEMS";
}
else
{
	echo "NOT INSERTED IN ANDROIDAPPITEMS";
}
$ad="select * from fcmtoken where  name='".$ida."';";
$aa=mysqli_query($con,$ad);
$tokens=array();
while($row=mysqli_fetch_array($aa))
{
    $tokens[]=$row['token'];
}
$mesage=array("message"=>"Your ". $itemn ." is ready");
$message_status=sendNotification($tokens,$mesage);
echo $message_status;

$ab="DELETE from androiditems where id='".$da."'";
if(mysqli_query($con,$ab))
{
	echo  "DELETED SUCCESSFULLY";
}
else
{
	echo  "NOT DELETED";
}
function sendNotification($tokens,$message)
{
  $url="https://fcm.googleapis.com/fcm/send";
  $fields=array(
    'registration_ids'=> $tokens,
    'data'=>$message
  );
  $headers=array(
    'Authorization:key=AIzaSyDSBKMDjm0xDofcQTAG_AgmAUIM-kmtr2g',
    'Content-Type:application/json'
  );

  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    if ($result === FALSE) {
        die('Curl failed: ' . curl_error($ch));
    }
    curl_close($ch);
    return $result;
}
?>