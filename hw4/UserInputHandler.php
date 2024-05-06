<html>
<head>
	<title>Homework4 - Handler</title>
	<link rel='stylesheet' href='style.css'>
</head>
<body>
	<?php
	
		$fn = $_POST['fname'] ;
		$ln = $_POST['lname'] ;
		$gender = $_POST['gender'] ;
		$fruit = $_POST['fruit'] ;
		
		echo 'First Name: ' . $fn . '<br>' ;
		echo 'Last Name: ' . $ln . '<br>' ;
		echo 'Gender: ' . $gender . '<br>' ;
		
		if(!empty($fruit)){
			$last = count($fruit) - 1 ;
			echo 'Favorite Fruit: ' ;
			foreach($fruit as $index => $f){
				echo '' . $f ;
				if($index !== $last){
					echo ', ' ;
				}
			}
		}else {
			echo 'I hate fruits!' ;
		}
	?>
</body>
</html>