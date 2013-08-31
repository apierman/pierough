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
	position: relative; 
	margin: 145px 0px 0px 120px;

}
</style>

<h2> Pierough.com Login </h2>
<!-- login form box -->
<div id="input">
<form method="post" action="index.php" name="loginform">
    <center><label for="login_input_username">Username</label>
            <input id="login_input_username" class="login_input" type="text" name="user_name" placeholder="Username" required /><br /><br />
            <label for="login_input_password">Password</label>
            <input id="login_input_password" class="login_input" type="password" name="user_password" placeholder="Password" autocomplete="off" required /><br /><br />
            <input type="submit"  name="login" value="Log in" /></center>
            <input id="user_ip_address" class="login_input" type="hidden" name="user_ip_address" value=<?php echo '"'.$ip_address.'"'; ?> />
</form>
<br>
<a href="register.php"> Register new account</a><br />
<a href="password_reset.php"> I forgot my password</a><br />
<a href="/index.php">  Back to Homepage</a>
</div>

<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->
