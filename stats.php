<?php
include 'config.php';

$twig = twig();

/*print_r(json_encode(array(
		array('Cycling', 20),
		array('Boomerang-ing', 10),
		array('Running', 30),
		array('Uncomplete', 50)
	)));*/

echo $twig->render('stats.twig', array(
	'page' => "Statistics",
	"data" => json_encode(array(
		"labels" => array("Cycling", "Boomerang-ing", "Running"),
		"series" =>  array(50, 20, 30)
	)),
	"data" => json_encode(array(
		"daily" => array(
			"labels" => array("Cycling", "Boomerang-ing", "Running"),
			"series" => array(50, 20, 30)
		),
		"weekly" => array(
			"labels" => array("Rodeo", "Light Jogging"),
			"series" => array(70, 30)
		),
		"monthly" => array(
			"labels" => array("Rodeo", "Light Jogging", "Cycling", "Boomerang-ing", "Running"),
			"series" => array(20, 15, 35, 10, 20)
		)
	)),
	"bmi" => 22.5,
	"rating" => array(true, true, true, true, false),
	"position" => 46,
	"last_position" => 60
));