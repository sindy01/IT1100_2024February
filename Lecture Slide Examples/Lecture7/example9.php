<!-- PHP | Global variables | Slide 15 -->

<?php

	$name = "Sam"; 
	$age = 31; 
	
	function testFunc() 
	{ 
		global $name, $age; 
		$greet = "Hello "; 
		echo $greet . "Name: " . $name . " - Age: " . $age; 
	} 
	
	testFunc();
	
?>
