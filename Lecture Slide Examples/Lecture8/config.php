<!-- Database Connectivity | Slide 14 -->

<?php

//The connection object
$con = new mysqli("localhost","root","","test"); //Database name is test

// Check connection
if($con->connect_error)
{
	die("Connection failed: " . $con->connect_error);
}
	
?>

