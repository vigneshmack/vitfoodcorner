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

<body onload="dbadd()" background="images/k104.jpg">
</body>
</html>
<?php
$mb=$_SESSION["log1"];
$tt=$_SESSION["log2"];
$sjt=$_SESSION["log3"];
 if(isset($_POST["sub"]))
 {
	 $a=$_POST["itemnam"];
	 $b=$_POST["cat"];
	 $c=$_POST["itemtyp"];
	 $d=$_POST["pr"];
	 include 'connect.php';
   $av=connection();
	if($av)
	{
		echo "";
	}
	else
	{
		die("could not connected".mysql_error());
	}
	if($mb==11)
	{
            $im=addslashes(file_get_contents($_FILES['fab']['tmp_name']));
	    $my1="insert into mbadditems values(NULL,'".$a."','".$b."','".$c."','".$d."','$im')";
	    if(mysqli_query($av,$my1))
        {
	        echo "<div id='snackbar'>DATA INSERTED IN MB CANTEEN SUCCESSFULLY...</div>";
        }
        else
        {
	        die("error");
        }
	}
	else if($tt==11)
	{
            $im=addslashes(file_get_contents($_FILES['fab']['tmp_name']));
	    $my2="insert into ttadditems values(NULL,'".$a."','".$b."','".$c."','".$d."','$im')";
	    if(mysqli_query($av,$my2))
        {
	        echo "<div id='snackbar'>DATA INSERTED IN TT CANTEEN SUCCESSFULLY...</div>";
        }
        else
        {
	        die("error");
        }
	}
	else if($sjt==11)
	{
            $im=addslashes(file_get_contents($_FILES['fab']['tmp_name']));
	    $my3="insert into sjtadditems values(NULL,'".$a."','".$b."','".$c."','".$d."','$im')";
	    if(mysqli_query($av,$my3))
        {
	        echo "<div id='snackbar'>DATA INSERTED IN SJT CANTEEN SUCCESSFULLY...</div>";
        }
        else
        {
	        die("error");
        }
	}
 }
?>
