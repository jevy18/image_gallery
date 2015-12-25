<?php
	
	ini_set('display_error','on');
	error_reporting(E_ALL || E_STRICT);

	class Uploader{

		//instance variables
		private $filename;
		private $fileData;
		private $destination;
		private $errorMessage;
		private $errorCode;

		//declare a constructor method
		public function __construct($key){
			$this->filename = $_FILES[$key]['name'];
			$this->fileData = $_FILES[$key]['tmp_name'];
			$this->errorCode = $_FILES[$key]['error'];
		}

		public function saveIn($folder){
			$this->destination = $folder;
		}

		public function save(){
			
			//call the new methid to look for upload errors
			//If it returns TRUE, save the uploaded file
			if( $this->readyToUpload() ){
				move_uploaded_file($this->fileData, "$this->destination/$this->filename");
			}else{
				//if not create an exception - pass error message as argument
				$exec = new Exception($this->errorMessage);
				throw $exec;
			}
		}

		private function readyToUpload(){
			$folderIsWriteAble = is_writable( $this->destination );
			if( $folderIsWriteAble === false ){
			
				//provide a meaningful error message
				$this->errorMessage = "Error: destination folder is ";
				$this->errorMessage .= "not writable, change permissions";
				
				//indicate that code is NOT ready to upload file
				$canUpload = false;
			}else{
			
				//assume no other errors - indicate we're ready to upload
				$canUpload = true;
			}
			return $canUpload ;
		}
	}
?>