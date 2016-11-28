<?php

	require 'page.php';
	require 'config.php';

	class Index{
		private $instance;

		static function singleton(){
			if(!self::$instance){
				new self;
				return $instance;
			} else{
				return $instance;
			}
			

		}

		static function init($array){
			new Page($array);
		}


	}

	Index::init($links);

	//$i=new Index();
	//$i->init();
