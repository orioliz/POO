<?php

	namespace X\Sys;

	class Registry{

		private $data=array();
		static $instance;

		function __construct(){
			$this->data=array();
		}

		function __set($key,$value){
			if(!array_key_exists($key, $this->data)){
				$this->data[$key] = $value;
			} 
		} // fin de _set


		function __get($key){
			if(!array_key_exists($key, $this->data)){
				return $this->data[$key];
			} else{
				return null;
			}
		}

		function __unset($key){
			if($key!=null){
				if(!array_key_exists($key, $this->data)){
					unset($this->data[$key]);
				}
			} else{
				unset($this->data);
			}
		}


	} // fin de class





