<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<style>
	table, tr, td, th {
		padding: 10px;
		border-collapse: collapse;
		border: 2px solid #000;
	}

	th {
		color: #fff;
		background-color: #000;
	}
</style>

</head>
<body>
	
	<?php 
// activity 1

	// $lyrics = array('stars', 'shine', 'yellow');
	
	// echo "Look at the $lyrics[0], ";
	// echo "Look how they $lyrics[1] for you. ";
	// echo "Yeah, It was all $lyrics[2]";

// activity 2

	// echo "<ul>";
	// echo "	<li>$lyrics[0]</li>";
	// echo "	<li>$lyrics[1]</li>";
	// echo "	<li>$lyrics[2]</li>";
	// echo "</ul>	";
	

// activity 3

	$fnames = array('Steph', 'Russel', 'LeBron');
	$lnames = array('Curry', 'Westbrook', 'James');
	$teams = array('Warriors', 'Thunders', 'Cavaliers');
	$jerseys = array('30', '0', '23');


	// echo "
	// 	  Player: $fnames[0] $lnames[0] <br>
	// 	  Team: $teams[0] <br>
	// 	  Jersey: $jerseys[0] <br><br>

	// 	  Player: $firstName[1] $lnames[1] <br>
	// 	  Team: $teams[1] <br>
	// 	  Jersey: $jerseys[1] <br><br>

	// 	  Player: $firstName[2] $lnames[2] <br>
	// 	  Team: $teams[2] <br>
	// 	  Jersey: $jerseys[2]
	// ";
?>

<!-- activity 4 -->	

	<table>
		<tr>
			<th>Player</th>
			<th>Team</th>
			<th>Jersey</th>
		</tr>

		<tr>
			<td><?php echo $fnames[0] . " " . $lnames[0]; ?></td>
			<td><?php echo $teams[0]; ?></td>
			<td><?php echo $jerseys[0]; ?></td>
		</tr>

		<tr>
			<td><?php echo $fnames[1] . " " . $lnames[1]; ?></td>
			<td><?php echo $teams[1]; ?></td>
			<td><?php echo $jerseys[1]; ?></td>
		</tr>

		<tr>
			<td><?php echo $fnames[2] . " " . $lnames[2]; ?></td>
			<td><?php echo $teams[2]; ?></td>
			<td><?php echo $jerseys[2]; ?></td>
		</tr>


	</table>


	

</body>
</html>