<?php
	require 'header.php';
	require 'menu.php';
	require 'contents.php';	
	require 'footer.php';



	class Page{
		protected $header;
		protected $contents;
		protected $menu;
		protected $footer;

		public function __construct($array){
			//echo "Mi pagina <br/>";
			$this->header= new Header();
			$this->header= new Menu($array);
			$this->header= new Contents();
			$this->header= new Footer();
		}


	}