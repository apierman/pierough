<?php
$run_time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

if ((isset($_SESSION["user_logged_in"]) && $_SESSION["user_logged_in"] == 1)) {
	echo '<p class="footer"><b>php page generation time '. number_format($run_time,4) .' seconds </b></p>' . "\n";
}
?>
<!-- <p class=footer><b>php page loaded <?php echo $run_time ?> seconds </b></p> -->
