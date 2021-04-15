<?php 
	session_start();
	echo"the session variable is<br>";
	if(isset($_SESSION['email']))
	{
	echo $_SESSION['email'];
	}
	else{
		echo "session time out";
	}
?>