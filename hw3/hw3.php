<html>
<head>
	<title>Homework three</title>
	<link rel='stylesheet' href='style.css'>
</head>
<body>
	<?php
		$x = -2 ;
		$y = 5 ;
		
		echo '<table>' ;
			echo '<tr>' ;
				echo '<th>X</th>' ;
				echo '<th>Y</th>' ;
				echo '<th>X*Y</th>' ;
				echo '<th>Is X*Y Negative?</th>' ;
			echo '</tr>' ;
			for($count = 0; $count < 5; $count++){
				$sum = $x * $y ;
				echo '<tr>' ;
					echo '<td>' . $x . '</td>' ;
					echo '<td>' . $y . '</td>' ;
					echo '<td>' . $sum . '</td>' ;
					if($sum < 0){
						echo '<td>Yes</td>' ;
					}else {
						echo '<td>No</td>' ;
					}
				echo '</tr>' ;
				$x++ ;
				$y-- ;
			}
		echo '</table>' ;
	?>
</body>
</html>