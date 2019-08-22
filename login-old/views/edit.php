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
	margin: 3px 3px 0px 75px;
	padding: 3px 3px 3px 3px;
	color: #FBFBF0;
	background: navy;
	position: absolute; 
	text-align: center;
	height: 300px;
	width: 280px;
	font-family: Arial, serif;
	font-size: 13px;
	background: navy; 
	border: #999 5px outset; 
}
#message {
	position: absolute; 
	margin: 329px 0px 0px 80px;

}
</style>


<h2>
    Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in and <br />can edit your credentials here:
</h2>

<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
<div id="input">
<br />
<form method="post" action="edit.php" name="user_edit_form_name">
    <label for="edit_input_username">New username cannot be empty and <br>must be azAZ09 and 2-64 characters</label><br />
    <input id="edit_input_username" class="login_input" type="text" name="user_name" placeholder="(currently: <?php echo $_SESSION['user_name']; ?>)" pattern="[a-zA-Z0-9]{2,64}" required /><br/>
    <input type="submit"  name="user_edit_submit_name" value="Change username" />
</form>

<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_email">
    <label for="edit_input_email">New email</label><br/>
    <input id="edit_input_email" class="login_input" type="email" name="user_email" placeholder="(<?php echo $_SESSION['user_email']; ?>)" required /><br/>
    <input type="submit"  name="user_edit_submit_email" value="Change email" />
</form>

<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
<form method="post" action="edit.php" name="user_edit_form_password">
    <label for="edit_input_email">New Password</label><br/>
<!--    <label for="edit_input_password_old">Your OLD Password</label> -->
    <input id="edit_input_password_old" class="login_input" type="password" name="user_password_old" placeholder="Enter OLD Password" autocomplete="off" />        
    <br/>
<!--    <label for="edit_input_password_new">Your NEW Password</label> -->
    <input id="edit_input_password_new" class="login_input" type="password" name="user_password_new" placeholder="Enter NEW Password" autocomplete="off" />        
    <br/>
<!--    <label for="edit_input_password_repeat">Repeat NEW password</label> -->
    <input id="edit_input_password_repeat" class="login_input" type="password" name="user_password_repeat" placeholder="Repeat NEW Password" autocomplete="off" />        
    <br/>
    <input type="submit"  name="user_edit_submit_password" value="Change password" />
</form>

</div>
<!-- backlink -->
<a id="message" href="/index.php">Back to Home Page</a>

<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->
