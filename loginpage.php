<!DOCTYPE html>
<html>
<head>
    <title>LOGIN PAGE</title>
    <style>
        .but {
            background-color:deepskyblue;
            border: none;
            color: white;
            padding: 6px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
        }
        .but1:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
    </style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/login1.css">
<body class="w3-container"  onload="document.getElementById('imp1').style.display='block'" >
<div id="imp1" class="w3-modal">
    <div class="w3-modal-content w3-card-5 w3-animate-zoom" style="width:490px;height:580px;">

        <div class="w3-center">
            <br>
            <label style="font-size:30px;color:crimson;align-content:center"><b>LOGIN</b></label>
            <div style="margin-top:8px;">
                <img src="images/k42.jpg"  style="width:50%;margin-left: 10px;" class="w3-circle w3-margin-top">
            </div>
        </div>
        <form   name="f1"  class="w3-container" action="trueloginpagedb.php" method="Post">
            <div class="w3-section">
                <label><b>Username</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="un">
                <label><b>Password</b></label>
                <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="ps">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" class="but but1" name="submit"  value="Sign In">
                <br><input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
            </div>
        </form>
        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('imp1').style.display='none'" type="button" class="w3-btn w3-red"><a href="homepage.php">Cancel</a></button>
            <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
        </div>
    </div>
</div>

</body>
</html>
