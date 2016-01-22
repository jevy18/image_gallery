<?php

	/*
	* @author: jevy18
	* @date: 01/22/2016 Updated Version
	*/

	ini_set('display_errors','on');
	error_reporting(E_ALL | E_STRICT);

	/*
	* HTML template page
	*/
	return "<!DOCTYPE html>
		<html>
		<head>
			<title>$pageData->title</title>
			<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
			$pageData->css
			$pageData->embeddedStyle		
		</head>
		<body>
		$pageData->content
		$pageData->scriptElements
	</body>
	<footer> 
		<p>Copyright © 2016. All right reserved. | <a href='http://validator.w3.org/check/referer' title='This page validates as XHTML 1.0 Transitional'><abbr title='eXtensible HyperText Markup Language'>XHTML</abbr></a>
	| 		<a href='http://jigsaw.w3.org/css-validator/check/referer' title='This page validates as CSS'><abbr title='Cascading Style Sheets'>CSS</abbr></a>
		</p>
			<p>Designed by <a href='#'>jevy18©TM </a> </p>

	</footer>
	</html>";

?>