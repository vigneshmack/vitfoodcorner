<?php
session_start();
$mb21=$_SESSION["log1"];
$tt21=$_SESSION["log2"];
$sjt21=$_SESSION["log3"];
session_destroy();
header('Location:homepage.php');
?>