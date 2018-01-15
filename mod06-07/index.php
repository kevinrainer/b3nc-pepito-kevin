<?php 
	include_once 'assets/lib/hello_world.php';

	require_once 'assets/lib/a_simple_require_file.php'

?>

<?php

	function printTable($rows, $cols) 
	{
		echo "<table border=1>";

		for($i = 0; $i < $rows; $i++) {
			echo "<tr>";
			for($j = 0; $j < $cols; $j++) {
				echo "<td> Content </td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	function add($a, $b) 
	{
		$sum = $a + $b;
		return $sum;
	}

	$number1 = 20;
	$number2 = 12;

	$total = add($number1, $number2);


	function longdate($timestamp) 
	{
		return date("l F jS Y", $timestamp);
	}

	function fix_names($n1, $n2, $n3)
	{
		$n1 = ufcfirst(srttolower($n1));
		$n2 = ufcfirst(srttolower($n2));
		$n3 = ufcfirst(srttolower($n3));
		return $n1 . " " . $n2 . " " . $n3;
	}
?>

<?php
	
	$a1 = "BILLY"; $a2 = "peejay"; $a3 = "aLLaN";

	function fix_names2()
	{
		global $a1; $a1 = ucfirst(strtolower($a1));
		global $a2; $a2 = ucfirst(strtolower($a1));
		global $a3; $a3 = ucfirst(strtolower($a1));
	}
?>

<?php 

	function area($l,$w)
	{
		return $l * $w;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale-1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP</title>
</head>
<body>
	
	<?php 
		printTable(1,1);
		echo "<br>";
		printTable(3,5);
	?>

<hr>

	<?php
		
	echo area(12,24);

	?>

<?php

IAmRequired();	

?>

</body>
</html>