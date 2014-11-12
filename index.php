<?php
	require_once('class\class.tweets.php');
	
	$c = new Tweets;
	$new_values = array(		
		"amount_of_tweets" => 10,		
	);
	echo $c->init($new_values);
?>