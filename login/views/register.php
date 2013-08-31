<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->

<!-- errors & messages --->
<?php

function get_ip_address()
{
    if (isset($_SERVER)) {
       if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]) && ip2long($_SERVER["HTTP_X_FORWARDED_FOR"]) !== false) {
          $ipadres = $_SERVER["HTTP_X_FORWARDED_FOR"];
       } elseif (isset($_SERVER["HTTP_CLIENT_IP"])  && ip2long($_SERVER["HTTP_CLIENT_IP"]) !== false) {
                $ipadres = $_SERVER["HTTP_CLIENT_IP"];
       } else {
                $ipadres = $_SERVER["REMOTE_ADDR"];
            }
        } else {
          if (getenv('HTTP_X_FORWARDED_FOR') && ip2long(getenv('HTTP_X_FORWARDED_FOR')) !== false) {
             $ipadres = getenv('HTTP_X_FORWARDED_FOR');
          } elseif (getenv('HTTP_CLIENT_IP') && ip2long(getenv('HTTP_CLIENT_IP')) !== false) {
                $ipadres = getenv('HTTP_CLIENT_IP');
          } else {
                $ipadres = getenv('REMOTE_ADDR');
          }
    }
        return $ipadres;
}

$ip_address = get_ip_address();

// show negative messages
if ($registration->errors) {
    foreach ($registration->errors as $error) {
        echo $error;    
    }
}

// show positive messages
if ($registration->messages) {
    foreach ($registration->messages as $message) {
        echo $message;
    }
}

?>   

<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>

<!-- register form -->
<style>
body {
	background: #FBFBF0;
}

h2 {
	margin: 0px 0px 10px 87px;
	font-family: Arial, Verdana, serif;
	color: Navy;
}

.register-main {
	height: 330px;
	width: 400px;
	
}
.register-input {
	margin: -5px 0px 0px 75px;
	padding: 2px;
	color: lightgray; /*#FBFBF0; */
	background: navy;
	position: absolute; 
	top 50%;
	left 50%;
	height: 200;
	width: 270px;
	font-family: Arial, serif;
	font-size: 14px;
	background: navy; 
	border: #999 5px outset; 
}
.message {
	position: absolute; 
	margin: 195px 0px 0px 111px;
}
</style>
<h2>Pierough Registration </h2>
<div class="register-main">
<form method="post" action="register.php" name="registerform">   
    
<div>
  <table class=register-input>
    <!-- the user name input field uses a HTML5 pattern check -->
    <tr><td><label for="login_input_username">Username</label></td>
        <td><input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" placeholder="only letters and #'s 2-64" name="user_name" required /></td></tr>
    
    <!-- the email input field uses a HTML5 email type check -->
    <tr><td><label for="login_input_email">User's email</label></td>
        <td><input id="login_input_email" class="login_input" type="email" name="user_email" required placeholder="valid email address" /></td></tr>
    
    <tr><td><label for="login_input_password_new">Password</label></td>
        <td><input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" placeholder="password" /></td></tr>
    
    <tr><td><label for="login_input_password_repeat">Repeat password</label></td>
        <td><input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" placeholder="repeat password" /></td></tr>
  </table>
            <input id="user_ip_address" class="login_input" type="hidden" name="user_ip_address" value=<?php echo '"'.$ip_address.'"'; ?> />
</div>
<div class="message">
    <!-- generate and display a captcha and write the captcha string into session -->
    <img src="tools/showCaptcha.php" /><br>
    
    <label>Please enter those characters</label><br>
    <input type="text" name="captcha" />      
    
    <input type="submit"  name="register" value="Register" />
 </div>   
</form>
</div>
<?php } ?>

<!-- backlink -->
<a href="index.php">Back to Login Page</a>

<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->
