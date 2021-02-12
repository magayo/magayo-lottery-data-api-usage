<?
	// Replace with your API key
	$api_key = "hXJDjsp8I6RY";
	
	$game = 'us_powerball';
	
	$url = "https://www.magayo.com/api/tickets.php?api_key=$api_key&game=$game&tickets=10";
	
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$json_string = curl_exec($ch);
	$parsed_json = json_decode($json_string);

	$error = $parsed_json->error;
	$number_of_tickets = $parsed_json->number;
	echo "$error<br>";
	echo "$number_of_tickets<br>";
	
	$tickets = $parsed_json->tickets;
	
	foreach ($tickets as $tickets_item) {
		$ticket = $tickets_item->ticket;
		echo "$ticket<br>";
	}

?>
