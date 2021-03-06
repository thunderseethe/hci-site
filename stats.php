<?php
include 'config.php';

$twig = twig();

/*print_r(json_encode(array(
		array('Cycling', 20),
		array('Boomerang-ing', 10),
		array('Running', 30),
		array('Uncomplete', 50)
	)));*/
function goal($name, $progress, $goal){
	return array(
		"name"=>$name,
		"progress"=>($progress*100)."%",
		"goal" => $goal
	);
}

echo $twig->render('stats.twig', array(
	'page' => "Statistics",
	"data" => array(
		"daily" => array(
			"labels" => array("Cycling", "Boomerang-ing", "Running"),
			"series" => array(50, 20, 30),
			"time" => 3
		),
		"weekly" => array(
			"labels" => array("Cycling", "Boomerang-ing", "Running", "Rodeo", "Light Jogging"),
			"series" => array(15, 5, 10, 50, 20),
			"time" => 20
		),
		"monthly" => array(
			"labels" => array("Rodeo", "Light Jogging", "Cycling", "Boomerang-ing", "Running", "Other"),
			"series" => array(20, 15, 30, 10, 20, 5),
			"time" => 150
		)
	),
	"goals" => array(
		goal("Hours", 0.6, 10000),
		goal("Calories", 0, 2000),
		goal("Workouts", 1, "Done"),
	),
	"bmi" => 22.5,
	"rating" => array(true, true, true, true, false),
	"position" => 46,
	"last_position" => 60,
));