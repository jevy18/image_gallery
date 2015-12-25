<?php

	ini_set('display_error','on');
	error_reporting(E_ALL || E_STRICT);

	include_once("classes/Page_Data.class.php");
	$pageData = new Page_Data();
	$pageData->addScript("js/lightbox.js");
	$pageData->title = "Dynamic image gallery";
	$pageData->content = include_once("views/navigation.php");
	$userClicked = isset($_GET['page']);
	if ($userClicked){
		$fileToLoad = $_GET['page'];
	}else{
		$fileToLoad = "gallery";
	}
	$pageData->content .= include_once("views/$fileToLoad.php");
	$pageData->addCSS("css/layout.css");
	$pageData->addCSS("css/navigation.css");
	$page = include_once("templates/page.php");
	
	echo $page;

?>