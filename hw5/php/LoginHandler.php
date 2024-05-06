<html>
<head>
	<title>Homework5 - Handler</title>
	<link rel='stylesheet' href='../style/style.css'>
</head>
<body>
	<?php
	
		session_start() ;
	
		$un = $_POST['uname'] ;
		$pw = $_POST['pword'] ;
		
		if( ($un == 'jma') && ($pw == 'jma123') ){
			$_SESSION['login'] = "true" ;
			$_SESSION['user'] = $un ;
			echo "<a href='mainmenu.php'>Main Menu</a>" ;
		}else{
			session_destroy() ;
			echo "<a href='login.html'>Login</a>" ;
		}
	
	?>
</body>
</html>