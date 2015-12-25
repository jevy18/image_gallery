<?php
	ini_set('display_errors', 'on');
	error_reporting(E_ALL | E_STRICT);
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
	</html>";

?>