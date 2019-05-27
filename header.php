<?php ?>
<div class="nav-line-left">
	<ul>	
		<li id="showClock"></li>
	        <?php  if ((isset($_SESSION["user_logged_in"]) && $_SESSION["user_logged_in"] == 1)) {
			  $ip_address = $_SESSION['ip'];
			//echo '<li class="nav-left-detail">ip: <a href="http://www.whatismyipaddress.com/">' . $_SERVER["REMOTE_ADDR"] . "</a>";
			echo '<li class="nav-left-detail"><img height=10 width=14 src="http://api.hostip.info/flag.php?ip='.$ip_address.'"> ip <a href="http://whatismyipaddress.com">'.$ip_address.'</a></li>';
		    }
		?>
	</ul>
</div>
<script type="text/javascript"> runClock("showClock", 1);</script>
<div>
	<ul>
		<?php if ((isset($_SESSION["user_logged_in"]) && $_SESSION["user_logged_in"] == 1)) {
		    echo '<li class="head-menu"><a href="/login/index.php?logout"><img height=25 width=65 src="images/icons/logout-02.png"></a></li>';
		    echo '<li class="head-menu"><a href="http://www.google.com"><img width=35 height=35 src="images/icons/help-01.png"></a></li>';
		    echo '<li class="head-menu"><a href="http://www.google.com"><img width=35 height=35 src="images/icons/contact-01.png"></a></li>';
		    echo '<li class="head-menu"><a href="/login/edit.php"> Welcome '.ucfirst($_SESSION["user_name"]).'</a></li>';
		  } else {
		    echo '<li class="head-menu"><a href="http://www.google.com"><img width=35 height=35 src="images/icons/help-01.png"></a></li>';
	   	    echo '<li class="head-menu"><a href="http://www.google.com"><img width=35 height=35 src="images/icons/contact-01.png"></a></li>';
		    echo '<li class="head-menu"><a href="https://pierough.com/login/index.php"><img width=35 height=35 src="images/icons/login-03.png"></a></li>';
	 	  }
		?>
	</ul>
</div>
