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
		"series" =>  array(20, 10, 30)
	)),
	"bmi" => 22.5,
	"rating" => array(true, true, true, true, false),
	"position" => 46,
	"last_position" => 60
));