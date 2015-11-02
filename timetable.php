<?php
include 'config.php';

$twig = twig();

function slot($time, $name, $location, $category="", $link="#!"){
	return array(
		"link"=>$link,
		"time"=>$time,
		"name"=>$name,
		"location"=>$location,
		"category"=>$category
	);
}

function around($name, $link="#!"){
	return array(
		"name"=>$name,
		"link"=>$link
	);
}

echo $twig->render('timetable.twig', array(
	'page' => 'Timetable',
	'day' => 'Monday',
	'slots' => array(
		slot("10:00", "Lecture", "Pevensey 1"),
		slot("11:00", "Kick. Box!", "Sports Centre"),
		slot("12:00", "Yoga (or food)", "Sports Centre"),
		slot("14:00", "Lecture", "ART A01"),
		slot("16:00", "Flight Class", "Sports Centre"),
		slot("18:00", "Seminar", "Jubilee 137")
	),
	'around' => array(
		around("The Gym"),
		around("Virgin Acting"),
		around("Community Center")
	)
));