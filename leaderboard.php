<?php

include 'config.php';

$twig = twig();

function row($avatar, $name, $score){
	return array(
		'name'=>$name,
		'score'=>$score,
		'avatar'=>$avatar,
	);
}

echo $twig->render('leaderboard.twig', array(
	'page' => "Leaderboard",
	'user' => 'thunderseethe',
	'rows' => array(
		//&#xE7FD;
		row("person", "The King", 9999),
		row("person", "Runner Up", 10),
		row("person", "Mike Ross", 7),
		row("person", "John Cena", 4),
		row("person", "thunderseethe", 0)
	)
));