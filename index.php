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

function goal($name, $progress){
	return array(
		"name"=>$name,
		"progress"=>($progress*100)."%"
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
    'button' => 'I am active!',
    'right_nav' => array(
    	navitem("Track", "add", "track")
    ),
	'events' => array(
		event("Event Here", "0:00", "#!"),
		event("Event Here", "1:00", "#!"),
		event("Night Time", "3:00", "#!")
	),
	'goals' => array(
		goal("Cycling", 0.6),
		goal("Goal Here", 0),
		goal("Goal Here", 1),
	),
	'actions' => array(
		action('Update BMI', '#!'),
		action('Lose Weight', '#!'),
		action('Discover Happiness', '#!')
	)
));
