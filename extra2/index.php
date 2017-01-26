<?php
	ini_set('display_errors', 1);
	require 'lib/autoload.php';
	
	use \Page\Lib\Autoload;
	use \Page\Lib\Page;


	$loader=new Autoload();
	$loader-> register();
	$loader->addNamespace('Page\Lib','lib');

	$p=new page();