

<?php

session_start();

if(isset($_POST["logoff"])) 
{
	session_destroy();
	header("Location:index.php");
}
else 
{
	header("Location:home.php");
}

?>
