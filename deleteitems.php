<!DOCTYPE html>
<?php session_start(); ?> 
<html>
<head>
    <title>DELETE ITEMS</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
			margin-top:-8px;
			margin-left:-8px;
            overflow: hidden;
        }
        li {
            float: left;
        }
        li a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 128px;
            text-decoration: none;
        }
        li{
            display: inline-block;
        }
        .active
        {
            background-color:crimson;
        }
		.active2
		{
			display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
		}
        .outerdiv
        {
            height:320px;
            width:540px;
            margin-top:115px;
            margin-left:388px;
            border:3px solid #454545;
        }

        .mld{
            background-color:#454545;
            color: white;
            height:40%;
            width:37%;
            font-size: 17px;
            border: 2px solid;
        }
        .bb {
            display: inline-block;
            border-radius: 4px;
            background-color: crimson;
            border: none;
            color: ghostwhite;
            text-align: center;
            font-size: 18px;
            padding: 6px;
            width: 120px;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .bb span {
            cursor: pointer;
            display: inline-block;
            position: relative;
        }

        .bb span:after {
            content:none;
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
        }
        .bb:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>
<body  background="images/k141.jpg">
<ul>
    <li><a class="active" href="additems.php" style="font-size:20px;">ADD NEWITEMS</a></li>
	<li  style="background-color:crimson;"><a  href="deleteitems.php" style="font-size:20px;">DELETE ITEMS</a></li>
    <li style="background-color:crimson;"><a href="todaymenus.php" style="font-size:20px;">TODAY MENUS</a></li>
	<li style="background-color:blue;"><a class="active2" href="homepage.php" style="font-size:20px;">GO HOME</a></li>
</ul>
<?php
$aa1=$_SESSION["log1"];
$aa2=$_SESSION["log2"];
$aa3=$_SESSION["log3"];
if($aa1==11)
{
  echo "<label style='margin-left:990px;color:orange;font-size:30px;'>"."<b>"."MB ADMIN LOGGED IN"."</b>"."</label>";
}
else if($aa2==11)
{
  echo "<label style='margin-left:1000px;color:orange;font-size:30px;'>"."TT ADMIN LOGGED IN"."</label>";
}
else if($aa3==11)
{
  echo "<label style='margin-left:1000px;color:orange;font-size:30px;'>"."SJT ADMIN LOGGED IN"."</label>";
}
?>
<div class="outerdiv">
    <form action="truedeleteitemsdb.php" method="post">
        <br> <br> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label style="color:darkblue;font-size:20px;"><b> ITEM NAME</b></label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" style="font-size:15px; background-color:blanchedalmond" name="itemnam">
        <br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label style="color:darkblue;font-size:20px;"><b> CATEGORY</b></label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select  class="mld" name="cat">
		    <option style="background-color: #454545;color:black;" value="CHOOSE CATEGORY">CHOOSE CATEGORY</option>
            <option style="background-color: #454545;color:black;" value="breakfast">BREAKFAST</option>
            <option style="background-color: #454545;color:black;" value="lunch">LUNCH</option>
            <option style="background-color: #454545;color:black;" value="dinner">DINNER</option>
            <option style="background-color: #454545;color:black;" value="snacks">SNACKS</option>
            <option style="background-color: #454545;color:black;" value="cools&beverages">COOLS&BEVERAGES</option>
        </select>
        <br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label style="color:darkblue;font-size:20px;"><b>ITEMTYPE</b></label>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select  class="mld" name="itemtyp">
		    <option style="background-color: #454545;color:black;" value="CHOOSE ITEMTYPE">CHOOSE ITEMTYPE</option>
            <option style="background-color: #454545;color:black;" value="regular">REGULAR</option>
            <option style="background-color: #454545;color:black;" value="irregular">IRREGULAR</option>
        </select>
        <br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span><input type="submit"  class="bb" name="del"  style="vertical-align:middle" value="DELETE"></span>&nbsp;&nbsp;&nbsp;
    </form>
</div>
</body>
</html>

