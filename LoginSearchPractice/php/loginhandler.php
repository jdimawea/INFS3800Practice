<html>
<head>
	<title>LoginSearchPractice - Handler</title>
	<link rel='stylesheet' href='../style/style.css'>
</head>
<body>
	<?php
	
		session_start() ;
		
		$con = mysqli_connect('127.0.0.1', 'practice', 'practice123', 'dbpractice') ;
		if(mysqli_connect_errno()){
			echo 'Failed to connect to MySQL' . mysqli_connect_error() ;
		}
		
		// Checks if there is a uname and pword from POST then creates variables
		if( isset($_POST['uname']) && isset($_POST['pword'])){
			$un = $_POST['uname'] ;
			$pw = $_POST['pword'] ;
		}
		
		// Checking for empty $un or $pw. If empty, destroy session then headback to login after 3 sec
		if(empty($un) && empty($pw)){
			session_destroy() ;
			echo 'Username and Password Required' ;
			header('refresh:3; url=login.php') ;
		}else if(empty($un)){
			session_destroy() ;
			echo 'Username Required' ;
			header('refresh:3; url=login.php') ;
		}else if(empty($pw)){
			session_destroy() ;
			echo 'Password Required' ;
			header('refresh:3; url=login.php') ;
		}else{
			// Creating SQL query to check if $un and $pw exists in the DB 
			$query = "
				Select *
				From users
				Where uname='$un' and pword='$pw'
				
			" ;
			
			$result = mysqli_query($con, $query) ;
			
			// Checking to see if the result returns one row
			if(mysqli_num_rows($result) === 1){
				$row = mysqli_fetch_assoc($result) ;
				
				if($row['uname'] === $un && $row['pword'] === $pw){
					echo 'Welcome ' . $un ;
					$_SESSION['login'] = 'true' ;
					$_SESSION['user'] = $row['uname'];
					header('refresh:2; url=search.php') ;
				}
			}else {
				session_destroy() ;
				echo 'Incorrect Username or Password' ;
				header('refresh:2; url=login.php') ;
			}
		}
	
	?>
</body>
</html>