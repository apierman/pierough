<!DOCType html>
<head>
<meta http-equiv="refresh" content="4; url=https://pierough.com" />
<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->
</head>

<body>
<div>
    <!-- if you need users's information, just put them into the $_SESSION variable and output them here -->
    Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.<br />
    Try to close this browser tab and open it again. Still logged in! ;)<br />
    And here's your profile picture (from gravatar):<br />
    <?php //echo $login->user_gravatar_image_url; ?>
    <?php echo $login->user_gravatar_image_tag; ?>
</div>

<div>
    <!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
    <a href="/login/index.php?logout">Logout</a><br />
    <a href="edit.php">Edit user data</a><br />
    <a href="/index.php">Return Home</a>
</div>
<!-- this is the Simple sexy PHP Login Script. You can find it on http://www.php-login.net ! It's free and open source. -->
</body>
