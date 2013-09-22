<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
<?php session_start(); 
  $ini_file=parse_ini_file("site.ini", true);
  # load all css file
  foreach ($ini_file["css"] as $key => $value) {
	echo '<link type="text/css" rel="stylesheet" href="'.$value.'">'. "\n";
  }
  # load all javascript file
  foreach ($ini_file["js"] as $key => $value) {
	echo '<script type="text/javascript" src="'.$value.'"></script>' . "\n";
  }
  # load all scripts that should run
  foreach ($ini_file["run"] as $key => $value) {
	echo $value. "\n";
  }
?>
<title><?php echo $ini_file["site"]["title"]; ?></title>


<body>
<header>
<?php include_once "header.php"; ?>
</header>
       <div class="container">

            <ul id="nav">
                <li><a href="/index.php">Home</a></li>
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
<footer>
<div class="footer">
<?php include_once "footer.php"; ?>
</div>
</footer>
</div>
</body>
</html>
