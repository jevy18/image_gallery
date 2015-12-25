<?php

	ini_set('display_error','on');
	error_reporting(E_ALL || E_STRICT);

	if(isset($uploadMessage) === false){
		$uploadMessage = "You can upload a new image!";
	}

	return "
	<h1>Upload new jpg images</h1>
	<form method='POST' action='index.php?page=upload' enctype='multipart/form-data' >
		<p>$uploadMessage</p>
		<label>Find a jpg image to upload</label>
		<input type='file' name='image-data' accept='image/jpeg' />
		<input type='submit' value='upload' name='new-image' />
	</form>";
?>