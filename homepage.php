<!DOCTYPE html>
<html xmlns:black>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/home1.css">
<link rel="stylesheet" href="css/home2.css">
<link rel="stylesheet" href="css/home3.css">
<head>
    <title>HOME PAGE</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color:azure;
        }
        li {
            float: left;
        }

        li a, .a1 {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 8px 20px;
            text-decoration: none;
        }

        li a:hover .a2{
            background-color: yellow;
        }

        li.a2 {
            display: inline-block;
        }

        .a3 {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        .a3 a {
            color: black;
            padding: 8px 5px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .a3 a:hover {background-color: #f1f1f1}

        .a2:hover .a3{
            display: block;
        }
        .active
        {
            background-color:crimson;
        }
        .tim
        {

            font-size:15px ;

			color:red;
        }
        .dat
        {

            font-size:15px ;

			color:red;
        }
        .kitchenvideo
        {
            height:479px;
            margin-top:-22px;
        }
        .mySlides {display: none}
    </style>
    <script type="text/javascript">
        function time()
        {
            var monthNames = [
                "January", "February", "March",
                "April", "May", "June", "July",
                "August", "September", "October",
                "November", "December"
            ];
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            var day = today.getDate();
            var month = today.getMonth();
            var year = today.getFullYear();
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('dmy').innerHTML=day+" "+monthNames[month]+" "+year;
            document.getElementById('hms').innerHTML=h+":"+m+":"+s;
            t=setTimeout('time()',500);
        }
        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>
</head>
<body onload="time()">
<ul>
    <li><a class="active" href="homepage.php" style="font-size:15px;">HOME</a></li>
    <li style="background-color:crimson;"><a href="loginpage.php" style="font-size:15px;">LOGIN</a></li>
    <li class="a2">
        <a href="#" class="a1" style="font-size:15px;background-color:crimson;">HELP</a>
        <div class="a3">
            <a href="contacts.php"  style="font-size:12px;">MB  CANTEEN</a>
            <a href="contacts.php"  style="font-size:12px;">TT  CANTEEN</a>
            <a href="contacts.php"  style="font-size:12px;">SJT CANTEEN</a>
        </div>
    </li>
	<li style="margin-left:310px; background-color:azure;"><a href="" style="font-size:13px;color:navy;"><marquee><b>VIT FOOD CORNER</b></marquee></a></li>
    <li style="float:right; background-color:crimson;"><a href="signout.php" style="font-size:15px;">SIGN OUT</a></li>
	<li style="float:right; background-color:navy;"><a href="" style="font-size:15px;"><div class="tim" id="hms"></div></a></li>
	<li style="float:right; background-color:navy;"><a href="" style="font-size:15px;"><div class="dat" id="dmy"></div></a></li>
</ul>
<img style="margin-left:-25px;margin-top:-1px;" src="images/k82.jpg" height="120px" width="1390px">
<div style="margin-top:0px;border:2px solid red;height:319px;width:283px">
    <img src="images/k81.jpg" height="315px" width="280px">
</div>
<div style="border:2px solid cornsilk;height:319px;width:283px">
    <img src="images/k83.jpg" height="315px" width="280px">
</div>
<div style="border:2px solid mediumvioletred;height:319px;width:283px">
    <img src="images/k84.jpg" height="315px" width="280px">
</div>
<div style="margin-left:283px;margin-top:-956px;border:1px solid black;height:480px;width:775px">
    <div class="w3-content">
        <div class="mySlides w3-display-container">
            <img src="images/k29.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k30.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k31.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k32.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k33.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k34.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k35.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k36.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k37.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k38.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k39.jpg" height="478px" width="773px" >
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k40.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k41.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k42.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k43.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k44.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k45.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k46.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k47.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k48.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k49.jpg"  height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container">
            <img src="images/k50.jpg" height="478px" width="773px">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
    </div>
</div>
<script>
    var myIndex = 0;
    tiffin();
    function tiffin() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(tiffin, 2000);
    }
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    var modal = document.getElementById('ticketModal');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<div style="margin-left:283px;border:1px solid black;height:480px;width:775px">
   <img src="images/k3.jpg" height="480px" width="775px">
</div>
<div style="margin-left:1058px;margin-top:-960px;border:2px solid navajowhite;height:319px;width:288px">
     <img src="images/k86.jpg" height="315px" width="285px">
</div>
<div style="margin-left:1058px;margin-top:0px;border:2px solid cornsilk;height:319px;width:288px">
     <img src="images/k87.jpg" height="315px" width="285px">
</div>
<div style="margin-left:1058px;margin-top:0px;border:2px solid red;height:319px;width:288px">
     <img src="images/k85.jpg" height="315px" width="285px">
</div>
</body>
</html>
