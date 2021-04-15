<?php
include("dbconfig.php");
session_start();
session_destroy();
	echo"you are successfully log out";
	header("Location:login.php");

?>