<?
	// Replace with your API key
	$api_key = "hXJDjsp8I6RY";
	
	$game = 'us_powerball';
	
	$url = "https://www.magayo.com/api/results.php?api_key=$api_key&game=$game";
	
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$json_string = curl_exec($ch);
	$parsed_json = json_decode($json_string);

	$error = $parsed_json->error;
	$draw = $parsed_json->draw;
	$results = $parsed_json->results;
	
	echo "$error<br>";
	echo "$draw<br>";
	echo "$results<br>";

?>
