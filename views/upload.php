<?php

	/*
	* @author: jevy18
	* @date: 01/22/2016 Updated Version
	*/

	ini_set('display_error','on');
	error_reporting(E_ALL || E_STRICT);

	include_once("classes/Uploader.class.php");
	$newImageSubmitted = isset($_POST['new-image']);

	if($newImageSubmitted){

		$uploader = new Uploader('image-data');

		//indicate destination folder on server
		$uploader->saveIn("img");

		try{

			$uploader->save();
			$uploadMessage = "file uploaded!";
				
		}catch(Exception $exception){
			$uploadMessage = $exception->getMessage();
		}
	}
	$output = include_once("views/upload-form.php");
	return $output;

?>