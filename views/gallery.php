<?php
	
	/*
	* @author: jevy18
	* @date: 01/22/2016 Updated Version
	*/

	ini_set('display_error','on');
	error_reporting(E_ALL || E_STRICT);

	//function call
	return showImages();


	//Function definition
	function showImages(){
		$out = "<h1>Image Gallery</h1>";	
		$out .= "<ul id='images'";
		$folder = "img";
		$filesInFolder = new DirectoryIterator($folder);

		//Iterate through the directory for images
		//with different file types
		while($filesInFolder->valid() ){
			$file = $filesInFolder->current();
			$filename = $file->getFilename();
			$src = "$folder/$filename";

			$fileInfo = new Finfo(FILEINFO_MIME_TYPE);
			$mimeType = $fileInfo->file($src);
			
			if($mimeType === 'image/jpeg' || $mimeType === 'image/pjpeg' || $mimeType === 'image/png' || $mimeType === 'image/gif'){
				$out .= "<li><img src='$src' /></li>";
			}
			$filesInFolder->next();
		}
		$out .= "</ul>";
		return $out;
	}

?>