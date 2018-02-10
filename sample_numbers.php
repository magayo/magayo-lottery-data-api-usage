<?
	// Replace with your API key
	$api_key = "hXJDjsp8I6RY";
	
	$game = 'us_powerball';
	
	$url = "https://www.magayo.com/api/numbers.php?api_key=$api_key&game=$game";
	
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$json_string = curl_exec($ch);
	$parsed_json = json_decode($json_string);

	$error = $parsed_json->error;
	$main = $parsed_json->main;
	$bonus = $parsed_json->bonus;
	$digit1 = $parsed_json->digit1;
	$digit2 = $parsed_json->digit2;
	$digit3 = $parsed_json->digit3;
	$digit4 = $parsed_json->digit4;
	$digit5 = $parsed_json->digit5;
	$digit6 = $parsed_json->digit6;
	$improved = $parsed_json->improved;

	echo "$error<br>";
	echo "$main<br>";
	echo "$bonus<br>";
	echo "$digit1<br>";
	echo "$digit2<br>";
	echo "$digit3<br>";
	echo "$digit4<br>";
	echo "$digit5<br>";
	echo "$digit6<br>";
	echo "$improved<br>";

?>
