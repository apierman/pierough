<div class="nav-line">
	<ul>	
		<li id="showClock"></li>
		<li>ip <a href="http://whatismyipaddress.com/" />
	        <?php  echo $_SERVER['REMOTE_ADDR'];  ?></a>
		</li>
	</ul>
</div>
<div>
	<ul>
		<li class="head-menu"><a href="/login/index.php?logout"><img height=25 width=65 src="images/icons/logout-02.png"></a></li>
		<li class="head-menu"><a href="http://www.google.com"><img width=35 height=35 src="images/icons/help-01.png"></a></li>
		<li class="head-menu"><a href="http://www.google.com"><img width=35 height=35 src="images/icons/contact-01.png"></a></li>
		<li class="head-menu"><a href="/login/edit.php"> Welcome <?php echo ucfirst($_SESSION['user_name']); ?></a></li>
	</ul>
</div>
