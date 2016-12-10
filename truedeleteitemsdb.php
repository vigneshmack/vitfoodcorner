<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
    <style>
        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: yellow;
            color: black;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }
    </style>
    <script>
        function dbadd()
        {
            var x = document.getElementById("snackbar")
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 7000);
        }
    </script>
</head>
<body onload="dbadd()" background="images/k103.jpg">
</body>
</html>


<?php
$mbblock=$_SESSION["log1"];
$ttblock=$_SESSION["log2"];
$sjtblock=$_SESSION["log3"];
if(isset($_POST["del"]))
 {
	 $a1=$_POST["itemnam"];
	 $a2=$_POST["cat"];
	 $a3=$_POST["itemtyp"];
	 include 'connect.php';
   $av1=connection();
	if($av1)
	{
		echo "";
	}
	else
	{
		die("could not connected".mysql_error());
	}
	if($mbblock==11)
	{
		$za1="DELETE FROM mbadditems WHERE itemname='".$a1."' AND category='".$a2."'  AND itemtype='".$a3."' ";
	    if(mysqli_query($av1,$za1))
	    {
		 echo "<div id='snackbar'>DATA DELETED IN MB CANTEEN SUCCESSFULLY...</div>";
	    }
	    else
	    {
		   echo " error" .mysqli_error($av1);
	    }
	}
	else if($ttblock==11)
	{
		$za2="DELETE FROM ttadditems WHERE itemname='".$a1."' AND category='".$a2."'  AND itemtype='".$a3."' ";
	    if(mysqli_query($av1,$za2))
	    {
		 echo "<div id='snackbar'>DATA DELETED IN TT CANTEEN SUCCESSFULLY...</div>";
	    }
	    else
	    {
		   echo " error" .mysqli_error($av1);
	    }
	}
	else if($sjtblock==11)
	{
		$za3="DELETE FROM sjtadditems WHERE itemname='".$a1."' AND category='".$a2."'  AND itemtype='".$a3."' ";
	    if(mysqli_query($av1,$za3))
	    {
		 echo "<div id='snackbar'>DATA DELETED IN SJT CANTEEN SUCCESSFULLY...</div>";
	    }
	    else
	    {
		   echo " error" .mysqli_error($av1);
	    }
	}
 }

?>
