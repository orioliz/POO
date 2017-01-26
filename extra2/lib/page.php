<?php


	namespace Page\Lib;
	use Page\Lib\Head;
	use Page\Lib\Body;
	use Page\Lib\Footer;


	class Page(){
		private $head; 
		private $body;
		private $footer;



		public function __construct() {
			echo "New page <br>";
			$this->head= new Head($titol,$logo);
		}


	}