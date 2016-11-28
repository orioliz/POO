<?php

	class menu{
		private $links;

		public function __construct($links=array){
			echo '<body> <nav>';
			echo '<ul>';
			foreach ($links as $link => $ref) {
				echo '<li> <a href="'.$ref.'"> '.$link.' </a> </li>';
				
			}
			echo '</ul></nav>';
		}
	}