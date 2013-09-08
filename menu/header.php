<?php 
if ((isset($_SESSION["user_logged_in"]) && $_SESSION["user_logged_in"] == 1)) {
   echo '<div id="showIp"><img height=14 width=20 align=left src="http://api.hostip.info/flag.php?ip='.$_SESSION['user_ip_address'].'"/> ip <a href="http://whatismyipaddress.com">'.$_SESSION['user_ip_address'].'</a></div>';
   //echo '<div id="showIp">ip <a href="http://whatismyipaddress.com">'. $_SESSION['user_ip_address']. '</a></div>';
   echo '<a class="nav-right" href="https://pierough.com/login/index.php?logout"><img width=35 height=35 src="images/icons/logout-01-gray.png"></a></li>';
} else {
   echo '<a class="nav-right" href="https://pierough.com/login/index.php"><img width=35 height=35 src="images/icons/login-01-green.png"></a></li>';
}
?>

<div id="showClock" class="nav-right"></div>
<script type="text/javascript"> runClock("showClock", 2);</script>

<?php 
if ((isset($_SESSION["user_logged_in"]) && $_SESSION["user_logged_in"] == 1)) {
   echo '<a href="/login/edit.php" class="stuts"> Welcome ' . ucfirst($_SESSION["user_name"]) . '</a>';
} else {
   echo '<a href="http://www.pierough.com/" class="stuts">Initial Link Somewhere<span>Home Page</span></a>';
}
?>
<h2><center>Welcome to pierough.com</center></h2>
