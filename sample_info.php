<?
	// Replace with your API key
	$api_key = "hXJDjsp8I6RY";
	
	$game = 'us_powerball';
	
	$url = "https://www.magayo.com/api/info.php?api_key=$api_key&game=$game";
	
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$json_string = curl_exec($ch);
	$parsed_json = json_decode($json_string);

	$error = $parsed_json->error;
	$name = $parsed_json->name;
	$country = $parsed_json->country;
	$state = $parsed_json->state;
	$main_min = $parsed_json->main_min;
	$main_max = $parsed_json->main_max;
	$main_drawn = $parsed_json->main_drawn;
	$bonus_min = $parsed_json->bonus_min;
	$bonus_max = $parsed_json->bonus_max;
	$bonus_drawn = $parsed_json->bonus_drawn;
	$same_balls = $parsed_json->same_balls;
	$digits = $parsed_json->digits;
	$drawn = $parsed_json->drawn;
	$is_option = $parsed_json->is_option;
	$option_desc = $parsed_json->option_desc;
	
	echo "$error<br>";
	echo "$name<br>";
	echo "$country<br>";
	echo "$state<br>";
	echo "$main_min<br>";
	echo "$main_max<br>";
	echo "$main_drawn<br>";
	echo "$bonus_min<br>";
	echo "$bonus_max<br>";
	echo "$bonus_drawn<br>";
	echo "$same_balls<br>";
	echo "$digits<br>";
	echo "$drawn<br>";
	echo "$is_option<br>";
	echo "$option_desc<br>";

?>
