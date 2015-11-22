<?php
include 'config.php';

$twig = twig();

$state = "first";
if(isset($_GET["state"])){
	$state = $_GET["state"];
}

switch($state){
	case "first":
		echo $twig->render('setup/first.twig', array(
			'page' => 'Setup',
			"state" => array(
				"goals" => array(10000),
				"paired" => false,
				"info" => array(
					"height" => "75",
					"weight" => "170",
					"track_bmi" => true
				)
			)
		));
	break;
	case "second":
		echo $twig->render('setup/second.twig', array(
			'page' => 'Setup',
		));
	break;
	case "third":
		echo $twig->render('setup/third.twig', array(
			'page' => 'Setup',
		));
	break;
}