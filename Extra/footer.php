<?php
namespace Page\Lib;
	class footer{
		public function __construct(){
			$str=file_get_contents('html/footer.php');
			$salida=$this->extractLink($links,$str);
			echo $salida;
		}

		private function extractLink($links,$str){
			$html='';
			$html='<ul>';
			foreach ($links as $key => $value) {
				$html = $html.'<li><a href="'.$value.'">'.$key.'</a></li>';
			}
			$html=$html.'</ul>';
			$salida=str_replace('{{enlaces}}',$html,$str);
			return $salida;
		}
	}