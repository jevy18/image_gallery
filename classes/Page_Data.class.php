<?php
	
	/*
	* @author: jevy18
	* @date: 01/22/2016 Updated Version
	*/

	ini_set('display_error','on');
	error_reporting(E_ALL || E_STRICT);

	class Page_Data{
		public $title = "";
		public $content = "";
		public $css = "";
		public $embeddedStyle = "";

		//declare a new property for script elements
		public $scriptElements = "";

		//declare a new method for adding Javascript files
		public function addScript($src){
			$this->scriptElements .= "<script src='$src'></script>";
		}

		//declare a new method to add multiple CSS files
		public function addCSS($href){
			$this->css .= "<link href='$href' rel='stylesheet' />";
		}
	}
?>