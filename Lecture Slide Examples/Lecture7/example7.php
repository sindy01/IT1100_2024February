<!-- PHP | Loop Through an Associative Array | Slide 10 -->

<!DOCTYPE html>
<html>
<body>
<?php

	$age = array("Sam" => "21", "Anton" => "23", "Piri" => "24");

	foreach ($age as $x => $y) 
	{
		echo "Key = " . $x . ", Value = " . $y;
		echo "<br>";
	}

?>
</body>
</html>

<!--
	$x = "Sam" 		& 	$y = $age["Sam"]   = 21		- Iteration 1
	$x = "Anton" 	& 	$y = $age["Anton"] = 23	 	- Iteration 2
	$x = "Piri" 	& 	$y = $age["Piri"]  = 24  	- Iteration 3
																	-->