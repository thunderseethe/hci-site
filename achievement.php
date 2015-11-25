<?php
include 'config.php';

$twig = twig();

function achievement($name, $icon, $percentage){
	return array(
		"name" => $name,
		"icon" => $icon,
		"complete" => $percentage
	);
}

echo $twig->render('achievement.twig', array(
	'page' => 'Achievements',
	"achievements" => array(
		achievement("Run 10k in a week", "directions_run", 100),
		achievement("Workout 5 days in a row", "star", 100),
		achievement("Have a sport session every day of the week", "highlight", 45),
		achievement("Do 3 hours of exercise on a weekend", "home", 0),
		achievement("Workout 2 hours in a day", "wb_sunny", 0)
	)
));