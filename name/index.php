<?php
	ini_set('display_errors',1);

	require('sys/autoload.php'); //cargamos el archivo autoload

	use Name\Sys\Autoload;

	$loader=new Autoload(); // creamos un nuevo autoload
	$loader->register();
	// registro de namespace de ruta actual
	$loader->addNamespace('Name','.'); 
	$loader->addNamespace('Name\Sys','sys'); 

	$p1=new MyClass1();
	$p2=new MyClass2();





















