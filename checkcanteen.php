<?php
session_start();
$mbcan=$_SESSION["log1"];
$ttcan=$_SESSION["log2"];
$sjtcan=$_SESSION["log3"];
if($mbcan==11)
{
	header('Location:mbcanteendata.php');
}
else if($ttcan==11)
{
	header('Location:ttcanteendata.php');
}
else if($sjtcan==11)
{
	header('Location:sjtcanteendata.php');
}
?>