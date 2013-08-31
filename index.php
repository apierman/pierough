<!DOCTYPE html>
<html>
<head>
<?php session_start(); ?>
<title>www.pierough.com</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
<script type="text/javascript" src="scripts/js/rps.js"></script>
<!-- <script type="text/javascript" src="scripts/clock.js"></script> -->
<script type ="text/javascript" lang="javascript">
function displayTime() {
  var today=new Date();
  var h=today.getHours();
  var m=today.getMinutes();
  var s=today.getSeconds();
  var merdiem = h >= 12 ? "pm" : "am";
  if (h === 0) h = 12;  
  if (h > 12) h -= 12;
  if (m < 10) m = "0" + m;
  if (s < 10) s = "0" + s;
  document.getElementById("showClock").innerHTML=h+":"+m+":"+s+" "+merdiem;
  t=setTimeout(function(){displayTime()},1000);
}

</script>
</head>

<body>
<?php include_once "header.php" ?>
<h1 class="header" align="center"> Welcome to Pierough.com </h1>
<div>
	<span class="left-menu">
	<ul>
		<li class="left-menu-text"><a href="/login/index.php"> Login to Website </a></li>
		<li class="left-menu-text"><a href="/menu.php"> Show Menu </a></li>
		<li class="left-menu-text"><a href="http://www.google.com"> Choose an option C</a></li>
		<li class="left-menu-text"><a href="http://www.google.com"> Choose an option D</a></li>
		<li class="left-menu-text"> <input style="color:navy" id="rps" type="button" value="    Play RPS    " onclick="playRPS();" /></li>
	</ul>
	</span>
        <a href="http://www.pierough.com/images/jpgs/grainary.jpg"><img alt="a great place" class="image" height=200 width=200 src="images/jpgs/grainary.jpg"></a>
	<a href="http://www.pierough.com/images/jpgs/main-house.jpg"><img alt="a farm house" class="image" src="images/jpgs/main-house.jpg"></a>
	<a href="http://www.pierough.com/images/jpgs/farm-bridge.jpg"><img alt="road less traveled" class="image" src="images/jpgs/farm-bridge.jpg"></a>
	<p class="paragraph"><em><b>This site is under construction!</b></em><br /><br />
	        This is an photo of a very nice relaxing location.
		There are also some changes to the web page that seem to make it look much more professional using css and other web tools.
		If you have not used these web tools before - it might make things look very different and sometimes not a eye-popping as
		they could.</p>
</div>
	<script type="text/javascript"> displayTime();</script>
</body>

</html>
