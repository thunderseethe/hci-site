<?php

include 'config.php';

$twig = twig();

function event($name, $time, $link){
	return array(
		"name"=>$name,
		"time"=>$time,
		"link"=>$link
	);
}

function goal($name, $progress, $goal){
	return array(
		"name"=>$name,
		"progress"=>($progress*100)."%",
		"goal" => $goal
	);
}

function action($name, $link){
	return array(
		'name'=>$name,
		'link'=>$link
	);
}

function navitem($text, $icon="", $link="#!"){
	return array(
		"link"=>$link,
		"text"=>$text,
		"icon"=>$icon
	);
}

echo $twig->render('index.twig', array(
	'page'=>'Today',

    'right_nav' => array(
    	navitem("Track", "add", "track")
    ),
	'events' => array(
		event("Sociology Seminar", "0:00", "#!"),
		event("Starlit Jogging", "1:00", "#!"),
		event("Night Time", "3:00", "#!")
	),
	'goals' => array(
		goal("Hours", 0.6, 10000),
		goal("Calories", 0, 2000),
		goal("Workouts", 1, "Done"),
	),
	'actions' => array(
		action('Update BMI', '#!'),
		action('Lose Weight', '#!'),
		action('Discover Happiness', '#!')
	),
	'class_of_week' => "Zoomba Roomba"
));
