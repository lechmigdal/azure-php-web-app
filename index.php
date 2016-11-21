<?php

echo "This works";
require "predis/autoload.php";
PredisAutoloader::register();


try {
	$redis = new PredisClient();

	// This connection is for a remote server
/*	$redis = new PredisClient(array(
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
*/
}
catch (Exception $e) {
	echo($e->getMessage());
}


?>
