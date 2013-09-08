<?php
$run_time = number_format(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 4);

if ((isset($_SESSION["user_logged_in"]) && $_SESSION["user_logged_in"] == 1)) {
	echo '<p class="footer"><b>php page load time '. $run_time .' seconds </b></p>';
}
?>
<!-- <p class=footer><b>php page loaded <?php echo $run_time ?> seconds </b></p> -->
