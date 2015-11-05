<?php
include 'config.php';

$twig = twig();

function goal($quantity, $metric, $interval){
	return array(
		"quantity" => $quantity,
		"metric" => $metric,
		"interval" => $interval
	);
}
function interval($value, $text){
	return array(
		"value" => $value,
		"text" => $text
	);
}

echo $twig->render('settings.twig', array(
	'page' => "Settings",
	'goals' => array(
		goal("10000", "steps", "day")
	),
	'times' => array(
		interval("day", "Per Day"),
		interval("week", "Per Week"),
		interval("lifetime", "Before Death")
	),
	'connected' => false,
	"feet"=>5,
	"inches"=>7,
	"weight"=>150,
	"track_bmi" => true,
	"class_suggestions" => true,
	"leaderboard_names" => true
));