<?php
	session_start() ;
?>
<html>
<head>
	<title>LoginSearchPractice - Login</title>
	<link rel='stylesheet' href='../style/style.css'>
</head>
<body>
	<form action='loginhandler.php' method='POST'>
		<div class='login-input'>
			<p><b>Username:</b> <input type='text' name='uname' value='jma'></p>
			<p><b>Password:</b> <input type='password' name='pword' value='jma123'></p>
			<p><input type='submit' value='Login'></p>
		</div>
	</form>
</body>
</html>