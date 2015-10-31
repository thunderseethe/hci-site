<?php
include 'vendor/autoload.php';

function twig(){
	$loader = new Twig_Loader_Filesystem('views');
	return new Twig_Environment($loader, array(

	));
}