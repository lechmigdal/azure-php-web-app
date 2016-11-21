<?php

echo "This works";
require "predis/autoload.php";

echo "13";

PredisAutoloader::register();

echo "14";
try {
//	$redis = new PredisClient();

	// This connection is for a remote server
	echo ("1");

	$redis = new PredisClient(array(
		    "scheme" => getenv('REDIS_SCHEME'),
		    "host" => getenv('REDIS_HOST'),
		    "port" => getenv('REDIS_PORT'),
        "password" => getenv('REDIS_PASSWORD')
		));

    echo ("Succes in connecting");

		// sets message to contian "Hello world"
		$redis->set('message', 'Hello world');

		// gets the value of message
		$value = $redis->get('message');

		echo($value);
}
catch (Exception $e) {
		echo ("exception");
	echo($e->getMessage());
}
	echo ("the end");
?>
