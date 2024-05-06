<html>
<head>
	<title>LoginSearchPractice - Results</title>
	<link rel='stylesheet' href='../style/style.css'>
</head>
<body>
	<?php
	
		$con = mysqli_connect('127.0.0.1', 'practice', 'practice123', 'dbpractice') ;
	
		$input = $_POST['input'] ;
		$query = "
			Select *
			From colors
			Where color like '%$input%' or poem like '%$input%'
			;
		" ;
		
		$result = mysqli_query($con, $query) ;
		
		if(!empty($input)){
			if(mysqli_num_rows($result) > 0){
				echo "<ul>" ;
				while($row = mysqli_fetch_array($result)){
					echo '<li>' ;
						echo '<p>' . $row['color'] . '</p>' ;
						echo '<p>' . $row['poem'] . '</p>' ;
					echo '</li>' ;
				}
				echo "</ul>" ;
			}else{
				echo "No results found for '$input'." ;
				header('refresh:2; url=search.php') ;
			}
		}
		
	?>
	<br><a href='search.php'>Back</a>
</body>
</html>