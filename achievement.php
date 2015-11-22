<?php
include 'config.php';

$twig = twig();

function achievement($name, $icon, $have){
	return array(
		"name" => $name,
		"icon" => $icon,
		"complete" => $have
	);
}

echo $twig->render('achievement.twig', array(
	'page' => 'Achievements',
	"achievements" => array(
		achievement("Run 10k in a week", "directions_run", true),
		achievement("Workout 5 days in a row", "star_rate", true),
		achievement("Have a sport session every day of the week", "highlight", false),
		achievement("Do 3 hours of exercise on a weekend", "home", false),
		achievement("Workout 2 hours in a day", "wb_sunny", false)
	)
));