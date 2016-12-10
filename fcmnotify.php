<?php
$ida=$_POST['id'];
$da=$_POST['status'];
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
$result1 = mysqli_query($con,"SELECT * FROM androiditems WHERE id='".$ida."' ");
while($row = mysqli_fetch_array($result1))
{
	$user=$row['username'];
        $item=$row['itemname'];
    
}
if($da=="ACCEPT")
{
	    $ab="update androiditems set orderstatus='".$da."' where id='".$ida."'";
        $ans=mysqli_query($con,$ab);
		if($ans)
		{
			  echo "updated successfully";
		}
		else
		{
			  echo "not updated";
		}
$result2= mysqli_query($con,"SELECT * FROM  fcmtoken WHERE name='".$user."' ");
$tokens=array();
while($row=mysqli_fetch_array($result2))
{
    $tokens[]=$row['token'];
}
$mesage=array("message"=>"YOUR " .$item. " ORDER ACCEPTED");
$message_status=sendNotification($tokens,$mesage);
echo $message_status;
}
else if($da=="DELETE")
{
		
	    $za2="DELETE FROM androiditems WHERE id='".$ida."'";
	    if(mysqli_query($con,$za2))
	    {
		   /*echo "<script type='text/javascript'>
		  alert('DELETED SUCCESSFULLY IN 	ANDROID ITEMS');
		   </script>";*/
	    }
	    else
	    {
		   //echo " error" .mysqli_error($av1);
	    }
$result2= mysqli_query($con,"SELECT * FROM  fcmtoken WHERE name='".$user."' ");
$tokens=array();
while($row=mysqli_fetch_array($result2))
{
  $tokens[]=$row['token'];
}
print_r( $tokens);
$mesage=array("message"=>"YOUR " .$item. " ORDER REJECTED");
$message_status=sendNotification($tokens,$mesage);
echo $message_status;
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
