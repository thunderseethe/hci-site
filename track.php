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
	case "main":
		echo $twig->render('track/main.twig', array(
			'page'=>"Track",
			'exercise'=>array(
				'name'=>'Boat',
				'quant' => '10,000,000',
				'step' => 'knots'
			),
			'track'=> json_encode(array(
				'time' => 0,
				'started' => false
			)),
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
			'exercise' => array(
				'name' => 'Boat',
				'quant' => '10,000,000',
				'step' => 'knots',
				'time' => '20:34 s'
			)
		));
	break;
	case "setup":
		$exercises = array(
			'Cycle' => array('km', 'mi', 'rot'),
			'Fly' => array('as the crow flys'),
			'Boat' => array('knots', 'lightyears'),
			'Run' => array('km', 'mi'),
			'Other Such Things' => array('such and such', 'hmmm')
		);
		ksort($exercises);

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
}