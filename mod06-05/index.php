<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php 


	// for ($counter = 1; $counter <= 10; $counter++) {
	// 	echo $counter;
	// 		if ($counter < 10) {
	// 			echo '-';
	// 		} 
	// 	}

	// for ($counter = 1; $counter <= 10; $counter++) {
	// 	for ($row = 1; $row <= 10; $row++) {
	// 		echo '*';
	// 	}
	// 	echo '<br>';
	// }

	
	// for ($i = 1; $i <= 10; $i++) {
	// 	for ($row = 1; $row <= 10; $row++)
	// 		echo $i * $row . ' ';
	// 		echo '<br>';
	// 	}

	// for ($row = 1; $row <= 10; $row++) {
	// 	for($col = 1; $col <= $row; $col++) {
	// 		echo ' ' . '*';
	// 	}
	// 	echo '<br>';
	// }

	// for ($row = 10; $row >= 1; $row--) {
	// 	for($col = 1; $col <= $row; $col++) {
	// 		echo '* ';
	// 	}
	// 	echo '<br>';
	// }

	for ($num = 1; $num <= 50; $num++) {
		if ($num % 3 == 0) 
			echo $num . 'Fizz <br>';
		if ($num % 5 == 0) 
			echo $num . 'Buzz <br>';
		if ($num % 3 == 0 && $num % 5 == 0) 
		 	echo $num . 'Fizz Buzz <br>';
	}


	?>
</html>
