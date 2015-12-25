<?php

	/*
	      Jevoun  12/04/2015 Original version
	*/


	############################################################################################
	# The following function prints an error message to the screeen in a well formatted manner #
	############################################################################################

	function errorHandler($errno, $errstr, $errfile, $errline, $errcontext)
	{
	  echo "<h1>Error</h1>";
	  echo "[$errno] $errstr ($errfile:$errline)";
	}

	set_error_handler("errorHandler");
?>
