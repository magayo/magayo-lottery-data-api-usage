<?
	// Replace with your API key
	$api_key = "hXJDjsp8I6RY";
	
	$game = 'us_powerball';
	$draw = '2021-01-20';
	
	$url = "https://www.magayo.com/api/past_jackpot.php?api_key=$api_key&game=$game&draw=$draw";
	
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$json_string = curl_exec($ch);
	$parsed_json = json_decode($json_string);

	$error = $parsed_json->error;
	$currency = $parsed_json->currency;
	$jackpot = $parsed_json->jackpot;
	
	echo "$error<br>";
	echo "$currency<br>";
	echo "$jackpot<br>";

?>
