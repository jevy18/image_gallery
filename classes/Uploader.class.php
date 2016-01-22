<?php

	/*
	* @author: jevy18
	* @date: 01/22/2016 Updated Version
	*/

	ini_set('display_error','on');
	error_reporting(E_ALL || E_STRICT);

	class Uploader{

		//instance variables
		private $filename;
		private $fileData;
		private $destination;
		private $errorMessage;
		private $errorCode;

		//declare a constructor method with one parameter
		public function __construct($key){
			$this->filename = $_FILES[$key]['name'];
			$this->fileData = $_FILES[$key]['tmp_name'];
			$this->errorCode = $_FILES[$key]['error'];
		}

		public function saveIn($folder){
			$this->destination = $folder;
		}


		/*
		* Check if the file can be uploaded
		*/
		public function save(){
			
			//call the new method to look for upload errors
			//If it returns TRUE, save the uploaded file
			if( $this->readyToUpload() ){
				move_uploaded_file($this->fileData, "$this->destination/$this->filename");

			}else{

				//if not create an exception - pass error message as argument
				$exec = new Exception($this->errorMessage);
				throw $exec;
			}
		}


		/*
		* Check if the file can be uploaded
		*/
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