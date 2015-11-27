<?php

include 'config.php';

function navitem($text, $icon="", $link="#!"){
	return array(
		"link"=>$link,
		"text"=>$text,
		"icon"=>$icon
	);
}

$twig = twig();

$state = "setup";
if($_GET && isset($_GET['state'])){
	$state = $_GET['state'];
}

switch($state){
	case "setup":
		$exercises = array(
			'Run' => array('hours', 'mins', 'kcals', 'kms', 'miles'),
			'Cycle' => array('hours', 'mins', 'kcals', 'kms', 'miles'),
			'Fly' => array('hours', 'mins', 'kcals', 'kms', 'miles'),
			'Row' => array('hours', 'mins', 'kcals', 'kms', 'miles')
		);

		echo $twig->render('track/setup.twig', array(
			'page' => 'Track',
			/*'track' => json_encode(array(
				'time' => 0,
				'started' => false
			)),*/
			'exercises' => json_encode($exercises),
			'back' => 'index',
			'next' => 'track?state=main'
		));
	break;
	case "main":
		echo $twig->render('track/main.twig', array(
			'page'=>"Track",
			/*"right_nav" => array(
				navitem("Cancel", "close", "#modal")
			),*/
			'exercise'=>array(
				'name'=>'Run',
				'quant' => '20',
				'step' => 'minutes'
			),
			'track'=> array(
				'time' => 20*60,
				'started' => false
			),
			'back' => 'track',
			'next' => 'track?state=post'
		));
	break;
	case "post":
		echo $twig->render('track/post.twig', array(
			'page' => 'Track',
			'right_nav' => array(
				navitem("Done", "done", "index")
			),
			'texts' => array(
				'Total Time: 25:00 minutes',
				'300 Calories burned',
				'30% of daily goal completed',
				'Leaderboard Position: 31',
				"You beat your best record!"
			)
		));
	break;
}