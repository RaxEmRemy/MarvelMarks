<?php
	session_start();
	session_destroy();
	
	echo"You've been successfully logged out!" . "<a href='index.html'> Click here to return.</a>";
?>