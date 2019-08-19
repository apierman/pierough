<!DOCTYPE html>
<html>
<head>
<?php session_start(); 
  $start_time = microtime(true); 
  $ini_file=parse_ini_file("site.ini", true);
?>
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="scripts/js/clock.js"></script>
    <script type="text/javascript" src="scripts/js/rps.js"></script>
    <script type="text/javascript" src="scripts/js/guessnum.js"></script>
    <script type="text/javascript" src="scripts/js/start_page.js"></script>
    <script type="text/javascript"> runClock("showClock", 1);</script

	<title><?php echo $ini_file["site"]["title"]; ?></title>


<body>
<?php include_once "header.php"; ?>
<h1 class="header" align="center"><?php echo $ini_file["site"]["welcome"]; ?> </h1>
<div>
	<div class="left-menu">
	<ul>
		<li class="left-menu-text"><a href="<?php echo $login_logout_url;?>"> <?php echo $login_logout_msg;?> </a></li>
		<li class="left-menu-text"><a href="menu/menu.php"> Show Menu </a></li>
		<li class="left-menu-text"><a href="http://www.google.com"> Choose an option C</a></li>
		<li class="left-menu-text"><a href="http://www.google.com"> Choose an option D</a></li>
		<li class="left-menu-text"> <input style="color:navy" id="rps" type="button" value="    Play RPS    " onclick="playRPS();" /></li> 
		<li class="left-menu-text"> <input style="color:navy" id="guessnum" type="button" value="  Guess Number  " onclick="playGuess(1000, 10);" /></li>
	</ul>
	</div>
        <a href="/images/jpgs/grainary.jpg"><img alt="a great place" class="image" height=200 width=200 src="images/jpgs/grainary.jpg"></a>
	<a href="/images/jpgs/main-house.jpg"><img alt="a farm house" class="image" src="images/jpgs/main-house.jpg"></a>
	<a href="/images/jpgs/farm-bridge.jpg"><img alt="road less traveled" class="image" src="images/jpgs/farm-bridge.jpg"></a>
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
