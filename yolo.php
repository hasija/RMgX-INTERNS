<?php
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

echo $twig->render('yolo.twig', 
	array('navigation' => array(
'na' => 'SHUBHAM', 
'as' => 'JATIN',
'naqw' => 'MAYANK'	)
	

	));

