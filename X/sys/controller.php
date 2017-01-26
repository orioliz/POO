<?php
	namespace X\Sys;
	/**
	*
	*   Controller: the base controller
	*     in MVC systems
	*
	*
	*
	**/
	class Controller{
		protected $model;
		protected $view;
		protected $params;
		protected $dataView;
		protected $conf;
		function __construct($params){
			$this->dataView=$dataView;
			$this->params=$params;
			$this->conf=Registry::getInstance();
		}
		function ajax($output){
			ob_clean();
			if(is_array($output)){
				echo json_encode($output);
			}
		}

	}