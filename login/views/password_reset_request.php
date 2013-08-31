<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->

<!-- errors & messages --->

<?php

// show negative messages
if ($login->errors) {
    foreach ($login->errors as $error) {
        echo $error;    
    }
}

// show positive messages
if ($login->messages) {
    foreach ($login->messages as $message) {
        echo $message;
    }
}

?>             

<style>
body {
	background: #FBFBF0;
}

h2 {
	margin: 0px 0px 10px 78px;
	font-family: Arial, Verdana, serif;
	color: Navy;
}
	
#input {
	margin: 0px 0px 0px 75px;
	padding: 14px 4px 4px 4px;
	color: #FBFBF0;
	background: navy;
	position: absolute; 
	height: 160px;
	width: 200px;
	font-family: Arial, serif;
	background: navy; 
	border: #999 5px outset; 
}
#message {
	position: absolute; 
	margin: 190px 0px 0px 120px;

}
</style>
<h2>Pierough Password Reset</h2>
<div id="input">
<!-- request password reset form box -->
<form method="post" action="password_reset.php" name="password_reset_form">
   <center> <label for="password_reset_input_username">Request a password reset. Enter your username and you'll get a mail with instructions:</label>
    <input id="password_reset_input_username" class="password_reset_input" type="text" name="user_name" required />
    <input type="submit"  name="request_password_reset" value="Reset my password" /><center>
</form>
</div>

<a id="message" href="index.php">Back to Login Page</a>
<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->
