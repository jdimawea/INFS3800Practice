<html>
<head>
	<title>Homework4 Redo - Handler</title>
	<link rel='stylesheet' href='../style/style.css'>
</head>
<body>
	<?php
	
		$fn = $_POST['fname'] ;
		$ln = $_POST['lname'] ;
		$g = $_POST['gen'] ;
		$fruit = $_POST['fruit'] ;
		
		echo 'First Name: ' . $fn . '<br>' ;
		echo 'Last Name: ' . $ln . '<br>' ;
		echo 'Gender: ' . $g . '<br>' ;
		
		if(!empty($fruit)){
			echo 'Favorite Fruit: ' ;
			$last = count($fruit) - 1 ;
			foreach($fruit as $index => $f) {
				echo ' ' . $f ;
				if($index !== $last){
					echo ', ' ;
				}
			}
		}else {
			echo "You don't like fruits!" ;
		}
		
	?>
</body>
</html>