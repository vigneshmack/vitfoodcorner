<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
    <title>TODAY MENUS</title>
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
		.ba {
            display: inline-block;
            border-radius: 4px;
            background-color: yellow;
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
        .ba span {
            cursor: pointer;
            display: inline-block;
            position: relative;
        }

        .ba span:after {
            content:none;
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
        }
        .ba:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
		 .bb1 {
            display: inline-block;
            border-radius: 4px;
            background-color: darkred;
            border: none;
            color: ghostwhite;
            text-align: center;
            font-size: 18px;
            padding: 4px;
            width: 80px;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .bb1 span {
            cursor: pointer;
            display: inline-block;
            position: relative;
        }

        .bb1 span:after {
            content:none;
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
        }
        .bb1:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
        .tiffin{
            background-color: #454545;
            color: white;
            text-align:center;
            height:5%;
            width:16%;
            font-size: 18px;
        }
		.tiffin1{
            background-color: #454545;
            color: white;
            text-align:center;
            height:8%;
            width:38%;
            font-size:18px;
        }
        .ins
		{
			height:360px;
            width:550px;
            margin-top:50px;
            margin-left:700px;
            border:3px solid #454545;;
		}
		.imp
		{
			display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 93px;
            text-decoration: none;
		}
    </style>
	<script>
	   function addRow()
        {
           var names = document.getElementById("insertname");
           var category = document.getElementById("insertcategory");
		   var itemtype = document.getElementById("insertitemtype");
		   var price = document.getElementById("insertprice");
           var table = document.getElementById("ta");
           var rowCount = table.rows.length;
           var row = table.insertRow(rowCount);
           row.insertCell(0).innerHTML=names.value.fontcolor("red");
           row.insertCell(1).innerHTML=category.value.fontcolor("purple");
           row.insertCell(2).innerHTML=itemtype.value.fontcolor("springgreen");
		   row.insertCell(3).innerHTML=price.value.fontcolor("dodgerblue");
		   row.insertCell(4).innerHTML='<input type="button"  class="bb1" value = "DELETE" align="center" onClick="Javacsript:deleterows(this)">';
		}
		function deleterows(obj)
		{
            if (confirm("Are you sure you want to delete this item") == true)
			{
              var index = obj.parentNode.parentNode.rowIndex;
              document.getElementById("ta").deleteRow(index);
            }
			else{}
        }
</script>
</head>
<body  background="images/k146.jpg">
<ul>
    <li><a class="active" href="additems.php" style="font-size:20px;">ADD NEWITEMS</a></li>
	<li style="background-color:crimson;"><a  href="deleteitems.php" style="font-size:20px;">DELETE ITEMS</a></li>
    <li style="background-color:crimson;"><a href="todaymenus.php" style="font-size:20px;">TODAY MENUS</a></li>
 <li style="background-color:blue;"><a class="active2" href="homepage.php" style="font-size:20px;">GO HOME</a></li>
</ul>
<?php
$aa1=$_SESSION["log1"];
$aa2=$_SESSION["log2"];
$aa3=$_SESSION["log3"];
if($aa1==11)
{
  echo "<label style='margin-left:980px;color:orange;font-size:30px;'>"."<b>"."MB ADMIN LOGGED IN"."</b>"."</label>";
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
    <form action="<?php $_PHP_SELF ?>" method="post">
        <br> <br> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label style="color:darkblue;font-size:20px;"><b> CATEGORY</b></label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select    class="tiffin" name="cat1" >
		    <option style="background-color: #454545;color:black;" value="CHOOSE CATEGORY">CHOOSE CATEGORY</option>
            <option style="background-color: #454545;color:black;" value="BREAKFAST">BREAKFAST</option>
            <option style="background-color: #454545;color:black;" value="LUNCH">LUNCH</option>
            <option style="background-color: #454545;color:black;" value="DINNER">DINNER</option>
            <option style="background-color: #454545;color:black;" value="SNACKS">SNACKS</option>
            <option style="background-color: #454545;color:black;" value="COOLS&BEVERAGES">COOLS&BEVERAGES</option>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label style="color:darkblue;font-size:20px;"><b>ITEMTYPE</b></label>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select    class="tiffin" name="cat2" >
		    <option style="background-color:#454545;color:black;" value="CHOOSE ITEMTYPE">CHOOSE ITEMTYPE</option>
            <option style="background-color:#454545;color:black;" value="REGULAR">REGULAR</option>
            <option style="background-color:#454545;color:black;" value="IRREGULAR">IRREGULAR</option>
			<option style="background-color:#454545;color:black;" value="BOTH">BOTH</option>
        </select>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="checkcanteen.php"  style="font-size:25px;color:yellow;">SEND DATA</a>
        <br><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <span><input type="submit"  class="bb" name="sub" style="vertical-align:middle" value="SUBMIT"></span>
		<div class="ins">
		<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label style="color:darkblue;font-size:20px;"><b>NAME</b></label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" style="font-size:17px;background-color:blanchedalmond" id="insertname">
		<br> <br> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label style="color:darkblue;font-size:20px;"><b>CATEGORY</b></label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select  class="tiffin1"  id="insertcategory">
		    <option style="background-color: #454545;color:black;" value="CHOOSE CATEGORY">CHOOSE CATEGORY</option>
            <option style="background-color: #454545;color:black;" value="BREAKFAST">BREAKFAST</option>
            <option style="background-color: #454545;color:black;" value="LUNCH">LUNCH</option>
            <option style="background-color: #454545;color:black;" value="DINNER">DINNER</option>
            <option style="background-color: #454545;color:black;" value="SNACKS">SNACKS</option>
            <option style="background-color: #454545;color:black;" value="COOLS&BEVERAGES">COOLSBEVERAGES</option>
        </select>
       	<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label style="color:darkblue;font-size:20px;"><b>ITEMTYPE</b></label>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select  class="tiffin1" id="insertitemtype">
		    <option style="background-color:#454545;color:black;" value="CHOOSE ITEMTYPE">CHOOSE ITEMTYPE</option>
            <option style="background-color:#454545;color:black;" value="REGULAR">REGULAR</option>
            <option style="background-color:#454545;color:black;" value="IRREGULAR">IRREGULAR</option>
        </select>
		<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label style="color:darkblue;font-size:20px;"><b>PRICE</b></label>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" style="font-size:17px; background-color:blanchedalmond" id="insertprice">
		<br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span><input type="button"  class="bb"  style="vertical-align:middle" onclick="Javascript:addRow()"  value="UPDATE"></span>
		</div>
	    <table style="font-size:20px;margin-top:-384px;margin-left:20px;border:"3px solid #454545" width="620" border="2" cellpadding="5" cellspacing="0" align="center" id="ta">
		<tr>
		<th style="font-size:20px;color:darkorange"><b>ITEMNAME</b></th>
		<th style="font-size:20px;color:darkorange"><b>CATEGORY</b></th>
		<th style="font-size:15px;color:darkorange"><b>ITEMTYPE</b></th>
		<th style="font-size:15px;color:darkorange"><b>PR</b></th>
		<th style="font-size:15px;color:darkorange"><b>STATUS</b></th>
		</tr>
		<?php
        $mbmenus=$_SESSION["log1"];
        $ttmenus=$_SESSION["log2"];
        $sjtmenus=$_SESSION["log3"];
        echo "MB:".$mbmenus;
        echo "TT:".$ttmenus;
        echo "SJT:".$sjtmenus;
        if(isset($_POST["sub"]))
        {
          include 'connect.php';
          $av=connection();
	    if($av)
	    {
		  echo "connected"."<br/>";
	    }
	    else
	    {
		die("could not connected".mysql_error());
	    }
	    $w1=$_POST["cat1"];
	    $w2=$_POST["cat2"];
	    if($mbmenus==11)
	    {
		    if(($w2=="REGULAR")||($w2=="IRREGULAR"))
			{
				$result1 = mysqli_query($av,"SELECT * FROM mbadditems WHERE category='".$w1."' AND itemtype='".$w2."' ");
	            while($row = mysqli_fetch_array($result1))
		        {
			          echo "<tr>";
			          echo "<td>";
			          echo "<font color='red'>"."<b>".$row['itemname']."</b>"."</font>";
			          echo "</td>";
			          echo "<td>";
			          echo "<font color='purple'>"."<b>".$row['category']."</b>"."</font>";
			          echo "</td>";
			          echo "<td>";
			          echo "<font color='springgreen'>"."<b>".$row['itemtype']."</b>"."</font>";
			          echo "</td>";
			          echo "<td>";
			          echo "<font color='dodgerblue'>"."<b>".$row['price']."</b>"."</font>";
			          echo "</td>";
			          echo "<td>";
			          echo "<input type='button' name='del' value='DELETE' align='center' class='bb1' onClick='deleterows(this)'>";
			          echo "</td>";
			          echo "</tr>";
		        }
			}
		    else if(($w2=="BOTH"))
		    {
			   $result10 = mysqli_query($av,"SELECT * FROM mbadditems WHERE category='".$w1."' ");
	           while($row = mysqli_fetch_array($result10))
		       {
			       echo "<tr>";
			       echo "<td>";
			       echo "<font color='red'>"."<b>".$row['itemname']."</b>"."</font>";
			       echo "</td>";
			       echo "<td>";
			       echo "<font color='purple'>"."<b>".$row['category']."</b>"."</font>";
			       echo "</td>";
				   echo "<td>";
			       echo "<font color='springgreen'>"."<b>".$row['itemtype']."</b>"."</font>";
			       echo "</td>";
			       echo "<td>";
			       echo "<font color='dodgerblue'>"."<b>".$row['price']."</b>"."</font>";
			       echo "</td>";
			       echo "<td>";
			       echo "<input type='button' name='del' value='DELETE' align='center' class='bb1' onClick='deleterows(this)'>";
			       echo "</td>";
			       echo "</tr>";
		       }
            }
  	    }
	    else if($ttmenus==11)
	    {
			if(($w2=="REGULAR")||($w2=="IRREGULAR"))
			{
				$result2 = mysqli_query($av,"SELECT * FROM ttadditems WHERE category='".$w1."' AND itemtype='".$w2."' ");
	            while($row = mysqli_fetch_array($result2))
		        {
			          echo "<tr>";
			          echo "<td>";
			          echo "<font color='red'>"."<b>".$row['itemname']."</b>"."</font>";
			          echo "</td>";
			          echo "<td>";
			          echo "<font color='purple'>"."<b>".$row['category']."</b>"."</font>";
			          echo "</td>";
			          echo "<td>";
			          echo "<font color='springgreen'>"."<b>".$row['itemtype']."</b>"."</font>";
			          echo "</td>";
			          echo "<td>";
			          echo "<font color='dodgerblue'>"."<b>".$row['price']."</b>"."</font>";
			          echo "</td>";
			          echo "<td>";
			          echo "<input type='button' name='del' value='DELETE' align='center' class='bb1' onClick='deleterows(this)'>";
			          echo "</td>";
			          echo "</tr>";
		        }
			}
		    else if(($w2=="BOTH"))
		    {
			   $result20 = mysqli_query($av,"SELECT * FROM ttadditems WHERE category='".$w1."' ");
	           while($row = mysqli_fetch_array($result20))
		       {
			       echo "<tr>";
			       echo "<td>";
			       echo "<font color='red'>"."<b>".$row['itemname']."</b>"."</font>";
			       echo "</td>";
			       echo "<td>";
			       echo "<font color='purple'>"."<b>".$row['category']."</b>"."</font>";
			       echo "</td>";
				   echo "<td>";
			       echo "<font color='springgreen'>"."<b>".$row['itemtype']."</b>"."</font>";
			       echo "</td>";
			       echo "<td>";
			       echo "<font color='dodgerblue'>"."<b>".$row['price']."</b>"."</font>";
			       echo "</td>";
			       echo "<td>";
			       echo "<input type='button' name='del' value='DELETE' align='center' class='bb1' onClick='deleterows(this)'>";
			       echo "</td>";
			       echo "</tr>";
		       }
            }
		}
	    else if($sjtmenus==11)
	    {
		   if(($w2=="REGULAR")||($w2=="IRREGULAR"))
			{
				$result3 = mysqli_query($av,"SELECT * FROM sjtadditems WHERE category='".$w1."' AND itemtype='".$w2."' ");
	            while($row = mysqli_fetch_array($result3))
		        {
			          echo "<tr>";
			          echo "<td>";
			          echo "<font color='red'>"."<b>".$row['itemname']."</b>"."</font>";
			          echo "</td>";
			          echo "<td>";
			          echo "<font color='purple'>"."<b>".$row['category']."</b>"."</font>";
			          echo "</td>";
			          echo "<td>";
			          echo "<font color='springgreen'>"."<b>".$row['itemtype']."</b>"."</font>";
			          echo "</td>";
			          echo "<td>";
			          echo "<font color='dodgerblue'>"."<b>".$row['price']."</b>"."</font>";
			          echo "</td>";
			          echo "<td>";
			          echo "<input type='button' name='del' value='DELETE' align='center' class='bb1' onClick='deleterows(this)'>";
			          echo "</td>";
			          echo "</tr>";
		        }
			}
		    else if(($w2=="BOTH"))
		    {
			   $result30 = mysqli_query($av,"SELECT * FROM sjtadditems WHERE category='".$w1."' ");
	           while($row = mysqli_fetch_array($result30))
		       {
			       echo "<tr>";
			       echo "<td>";
			       echo "<font color='red'>"."<b>".$row['itemname']."</b>"."</font>";
			       echo "</td>";
			       echo "<td>";
			       echo "<font color='purple'>"."<b>".$row['category']."</b>"."</font>";
			       echo "</td>";
				   echo "<td>";
			       echo "<font color='springgreen'>"."<b>".$row['itemtype']."</b>"."</font>";
			       echo "</td>";
			       echo "<td>";
			       echo "<font color='dodgerblue'>"."<b>".$row['price']."</b>"."</font>";
			       echo "</td>";
			       echo "<td>";
			       echo "<input type='button' name='del' value='DELETE' align='center' class='bb1' onClick='deleterows(this)'>";
			       echo "</td>";
			       echo "</tr>";
		       }
            }
	    }
    }
?>
		</table>
    </form>
</body>
</html>
