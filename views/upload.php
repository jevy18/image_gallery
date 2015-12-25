<?php

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


	/*
	//$newImageSubmitted is TRUE if form was submitted, otherwise FALSE
	$newImageSubmitted = isset($_POST['new-image']);
	
	if ($newImageSubmitted){
		//this code runs if the form was submitted
		$output = upload();
	}else{
		//this runs if form was NOT submitted
		$output = include_once("views/upload-form.php");	
	}
	return $output;
	*/



	//declare a new function
	/*function upload(){
		$out = "<pre>";
		$out .= print_r($_FILES,true);
		$out .= "</pre>";
		return $out;
	}*/

	/*
	function upload(){
		
		include_once("classes/Uploader.class.php");

		//image-data is the name attribute used in <input type='file' />
		$uploader = new Uploader('image-data');

		$uploader->saveIn("img");
		
		$fileUploaded = $uploader->save();
		if ($fileUploaded){
			$out = "new file uploaded";
		}else{
			$out = "something went wrong";
		}
		return $out;
	}*/

?>