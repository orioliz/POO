<?php
	namespace demo;

	//Cargar autoload y usarlo
	require 'autoload.php';
	use \demo\Autoload;

	// crear variable que la lanze
	$loader = new Autoload;

	//Creamos 
	$loader->register();
	$loader->addNamespace('demo','.');
	$loader->addNamespace('demo\sys','sys');


	use \demo\Person;

	$p= new Person('Pepe');
	var_dump($p);