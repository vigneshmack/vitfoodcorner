<?php
session_start();

include 'connect.php';
$conn1=connection();

$i=10;
$j=10;
$k=10;
 $_SESSION["log1"]=$i;
 $_SESSION["log2"]=$j;
 $_SESSION["log3"]=$k;
$user=$_POST["un"];
$pass=$_POST["ps"];
//$conn1=mysqli_connect("localhost","root","bro","mainbuilding");
if(isset($_POST["submit"]))
{
	$q1=mysqli_query($conn1,"select * from mblogin");
	$q2=mysqli_query($conn1,"select * from ttlogin");
	$q3=mysqli_query($conn1,"select * from sjtlogin");
	while($row=mysqli_fetch_array($q1))
	{
		$u1=$row["username"];
		$p1=$row["password"];
	}
	while($row=mysqli_fetch_array($q2))
	{
		$u2=$row["username"];
		$p2=$row["password"];
	}
	while($row=mysqli_fetch_array($q3))
	{
		$u3=$row["username"];
		$p3=$row["password"];
	}
	if(($user==$u1)&&($pass==$p1))
	{
		echo "<script type='text/javascript'>
		alert('MB ADMIN LOG IN TO SYSTEM');
		</script>";
		++$i;
	    $_SESSION["log1"] = $i;
		echo header("Location:additems.php");
	}
	else if(($user==$u2)&&($pass==$p2))
	{
		++$j;
		$_SESSION["log2"] = $j;
		echo "<script type='text/javascript'>
		alert('TT ADMIN LOG IN TO SYSTEM');
		</script>";
		echo header("Location:additems.php");
	}
	else if(($user==$u3)&&($pass==$p3))
	{
		++$k;
		$_SESSION["log3"] = $k;
		echo "<script type='text/javascript'>
		alert('SJT ADMIN LOG IN TO SYSTEM');
		</script>";
		echo header("Location:additems.php");
	}
	else
	{
		echo "<script type='text/javascript'>
		alert('LOGIN UNSUCCESSFULL');
		</script>";
	}
}
?>
