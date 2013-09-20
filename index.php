<!DOCTYPE html>
<html>
<head>
<?php session_start(); 
  $start_time = microtime(true); 
  $ini_file=parse_ini_file("site.ini", true);
  foreach ($ini_file["js"] as $key => $value) {
	echo '<script type="text/javascript" src="' . $value . '"></script>' . "\n";
  }
?>
<title><?php echo $ini_file["site"]["title"]; ?></title>
<link type="text/css" rel="stylesheet" href=<?php echo '"'.$ini_file["index"]["css"].'"';?> />
<script type="text/javascript" src="scripts/js/rps.js"></script>
<script type="text/javascript" src="scripts/js/clock.js"></script>
</head>

<body>
<?php include_once "header.php" ?>
<h1 class="header" align="center"> Welcome to Pierough.com </h1>
<div>
	<span class="left-menu">
	<ul>
		<li class="left-menu-text"><a href="/login/index.php"> Login to Website </a></li>
		<li class="left-menu-text"><a href="/menu/menu.php"> Show Menu </a></li>
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
<div class="footer">
<?php include_once "footer.php" ?>
</div>
</body>

</html>
