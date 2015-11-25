<?php
include 'config.php';

$twig = twig();

$state = "1";
if(isset($_GET["state"])){
	$state = $_GET["state"];
}

switch($state){
	case "1":
		echo $twig->render('setup/first.twig', array(
			'page' => 'Setup',
			'next' => '2'
		));
	break;
	case "2":
		echo $twig->render('setup/second.twig', array(
			'page' => 'Setup',
			"state" => array(
				"goals" => array(10000),
				"paired" => false,
				"info" => array(
					"height" => "75",
					"weight" => "170",
					"track_bmi" => true
				)
			),
			'prev' => '1',
			'next' => '3'
		));
	break;
	case "3":
		echo $twig->render('setup/third.twig', array(
			'page' => 'Setup',
			'prev' => '2',
			'next' => '4'
		));
	break;
	case "4":
		echo $twig->render('setup/fourth.twig', array(
			'page' => 'Setup',
			'prev' => '3'
		));
	break;
}