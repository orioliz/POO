<?php

	class header{
		public function __construct($title=null){
			//echo "Soy el header <br/>";
			$str=file_get_contents('tpl/header.php');
			
			var_dump($str);
		}
	}