<?php
	
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

		//echo "folder files:".$folder."<br />";
		while($filesInFolder->valid() ){
			$file = $filesInFolder->current();
			$filename = $file->getFilename();
			echo "Filename fetching:".$filename."<br />";
			$src = "$folder/$filename";

			//echo "Source files:".$src."<br />";
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