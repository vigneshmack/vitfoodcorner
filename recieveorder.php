<!DOCTYPE html>
<html>
<head>
    <title>RECIEVE ORDER</title>
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
            padding: 14px 93px;
            text-decoration: none;
        }
        li{
            display: inline-block;
        }
        .active
        {
            background-color:crimson;
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
<body  background="images/k91.jpg">
<ul>
    <li><a class="active" href="additems.php" style="font-size:20px;">ADD NEWITEMS</a></li>
	<li  style="background-color:crimson;"><a  href="deleteitems.php" style="font-size:20px;">DELETE ITEMS</a></li>
    <li style="background-color:crimson;"><a href="todaymenus.php" style="font-size:20px;">TODAY MENUS</a></li>
    <li style="background-color:crimson"><a href="recieveorder.php" style="font-size:20px;">RECIEVE ORDER</a></li>
</ul>
</body>
</html>
