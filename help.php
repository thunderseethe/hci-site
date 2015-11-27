<?php
include 'config.php';

$twig = twig();

function item($text, $link="#!"){
	return array(
		"text"=>$text,
		"link"=>$link
	);
}

echo $twig->render('help.twig', array(
	"page" => "Help",
	"links" => array(
		item("Set up"),
		item("Logging Activity"),
		item("Syncing timetable and calendar"),
		item("Leaderboard"),
		item("Mapping your Route"),
		item("Personalise achievements"),
		item("Contact us")
	)
));