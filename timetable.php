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

$state = "mon";
if(isset($_GET["state"]))
	$state = $_GET["state"];

switch($state){
	case 'mon':
	echo $twig->render('timetable.twig', array(
		'page' => 'Timetable',
		'day' => "Monday",
		'slots' => array(
			slot("10:00", "Lecture", "Pevensey 1"),
			slot("11:00", "Kick. Box!", "Sports Centre"),
			slot("12:00", "Yoga (or food)", "Sports Centre"),
			slot("14:00", "Lecture", "ART A01"),
			slot("16:00", "Flight Class", "Sports Centre"),
			slot("18:00", "Seminar", "Jubilee 137")
		),
		'next' => 'timetable?state=tue',
	));
	break;
	case 'tue':
	echo $twig->render('timetable.twig', array(
		'page' => 'Timetable',
		'day' => 'Tuesday',
		'slots' => array(
			slot("9:00", "Lecture", "Arundel"),
			slot("12:00", "Seminar", "Chicester 2"),
			slot("15:00", "Class", "JMS Building"),
			slot("19:00", "Jogging", "Campus")
		),
		'prev' => 'timetable?state=mon'
	));
	break;
}