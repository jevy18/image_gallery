<?php

	/*
	* @author: jevy18
	* @date: 01/22/2016 Updated Version
	*/

	ini_set('error_display','on');
	error_reporting(E_ALL || E_STRICT);

	/*
	* Dynamic Navigation menu
	*/
	return "
	<nav>
		<a href='index.php?page=gallery'>Gallery</a>
		<a href='index.php?page=upload'>Upload new image</a>
	</nav>";
?>