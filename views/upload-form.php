<?php

	/*
	* @author: jevy18
	* @date: 01/22/2016 Updated Version
	*/

	ini_set('display_error','on');
	error_reporting(E_ALL || E_STRICT);

	if(isset($uploadMessage) === false){
		$uploadMessage = "You can upload a new image!";
	}


	/*
	* Upload form
	*/
	return "
	<h1>Upload new jpg images</h1>
	<form method='POST' action='index.php?page=upload' enctype='multipart/form-data' >
		<p>$uploadMessage</p>
		<label>Click browse and find an image file to upload</label>
		<input type='file' name='image-data' accept='image/jpeg' />
		<input type='submit' value='upload' name='new-image' />
	</form>";
?>