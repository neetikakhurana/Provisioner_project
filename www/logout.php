<?php
	session_start(); # Starts the session
	session_unset(); #removes all the variables in the session
	session_destroy(); #destroys the session

   		echo "Successfully logged out!<br />";

?>

<a href="index.html">Want to login again? </a>