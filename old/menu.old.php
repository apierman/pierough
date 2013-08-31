<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
	<?php session_start(); ?>
        <title>www.pierough.com - Welcome</title>
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="scripts/rps.js"></script>
        <script type ="text/javascript" lang="javascript">
	function displayTime() {
	   var today=new Date();
	   var d=today.getDate();
	   var mo=today.getMonth() + 1;
	   var y=today.getFullYear();
	   var h=today.getHours();
	   var m=today.getMinutes();
	   var s=today.getSeconds();
	   var merdiem = h >= 12 ? "pm" : "am";
	   if (h === 0) h = 12;  
	   if (h > 12) h -= 12;
	   if (m < 10) m = "0" + m;
	   if (s < 10) s = "0" + s;
	   document.getElementById("showClock").innerHTML=mo+"/"+d+"/"+y+" "+h+":"+m+":"+s+" "+merdiem;
	   t=setTimeout(function(){displayTime()},1000);
	}
       </script>
    </head>
    <body>
        <header>
            <div id="showIp"><a href="http://whatismyipaddress.com"> <?php  echo "ip: ". $_SERVER['REMOTE_ADDR']; ?></a></div>
            <div id="showClock"></div><br />
            <h2>Welcome to pierough.com</h2>
	      <a href="http://www.pierough.com/" class="stuts">Initial Link Somewhere<span>Home Page</span></a>
        </header>
       <div class="container">

            <ul id="nav">
                <li><a href="http://www.google.com/">Home</a></li>
                <li><a class="hsubs" href="#">About Us</a>
                    <ul class="subs">
                        <li><a href="#">Pictures</a></li>
                        <li><a href="#">Information</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Farm Pictures</a></li>
                        <li><a href="#">Lake Pictures</a></li>
                    </ul>
                </li>
                <li><a class="hsubs" href="#">Picture Gallery</a>
                    <ul class="subs">
                        <li><a href="#">Andy Pictures</a></li>
                        <li><a href="#">Tracey Pictures</a></li>
                        <li><a href="#">Put Pictures</a></li>
                        <li><a href="#">G.J. Pictures</a></li>
                        <li><a href="#">Paige Pictures</a></li>
                        <li><a href="#">Dorothy Pictures</a></li>
                        <li><a href="#">Our Pets' Pictures</a></li>
                    </ul>
                </li>
                <li><a class="hsubs" href="#">Information</a>
                    <ul class="subs">
                        <li><a href="#">About this site</a></li>
                        <li><a href="#">Reference Sites</a></li>
                        <li><a href="#">Informational</a></li>
                        <li><a href="#">Linux Sites</a></li>
                    </ul>
                </li>
                <li><a href="#">Menu 4</a>
                    <ul class="subs">
                        <li><a href="#">Submenu 4-1</a></li>
                        <li><a href="#">Submenu 4-2</a></li>
                        <li><a href="#">Submenu 4-3</a></li>
                        <li><a href="#">Submenu 4-4</a></li>
                        <li><a href="#">Submenu 4-5</a></li>
                    </ul>
		</li>
                <li><a href="#">Menu 5</a>
                    <ul class="subs">
                        <li><a href="#">Submenu 5-1</a></li>
                        <li><a href="#">Submenu 5-2</a></li>
                        <li><a href="#">Submenu 5-3</a></li>
                        <li><a href="#">Submenu 5-4</a></li>
                        <li><a href="#">Submenu 5-5</a></li>
                    </ul>
		</li>
                <li><a href="http://www.pierough.com/">Back to index page</a></li>
               <div id="lavalamp"></div>
            </ul>

	   <div>
		<input id="rps" type="button" value="Play RPS" onclick="playRPS();" />
	   </div>
        </div>
	<script type="text/javascript"> 
            displayTime(); 
	</script>
    </body>
</html>
