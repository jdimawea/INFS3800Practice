<html>
<head>
	<title>Homework5 - Main Menu</title>
</head>
<body>
	<?php
		session_start() ;
		
		if( isset($_SESSION['user']) && !empty($_SESSION['user']) ){
			echo 'Welcome ' . $_SESSION['user'] ;
		}else{
			echo "<a href='login.html'>Login</a>" ;
		}
	?>
</body>
</html>