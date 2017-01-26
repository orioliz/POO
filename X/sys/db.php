<?php

	namespace X\Sys;

	class DB extends \POO {
		static $instance;

		public function __construct() {
			//recuperar cponf por Json
			$config=Registry::getInstance();
			$dbconf=(array)$config->dbconf;
			$dsn=$dbconf['driver'].':host='.$dbconf['dbhost'].':dbname='.$dbconf['dbname'];
			$usr;
			$pass;
			try{
				parent::__construct($dsn,$usr,$pass);
			} catch(PDOException $a) {

			}
			var_dump($dbconf);
			die;
			
		}
	}