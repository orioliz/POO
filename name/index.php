<?php
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	require 'sys/autoload.php';

	use Name\Sys\Autoload;
	use Name\Public\Myclass3;

	$loader=new Autoload();
	$loader->register();
	$loader->addNamespace('Name', '.');
	$loader->addNamespace('Name\Sys', 'sys');
	$loader->addNamespace('Name\Public', 'public');

	$p=new \Name\Myclass1();
	$p1= new \Name\Sys\Myclass2();
	$p2= new Myclass3();




