<?php
    function connectDatabase(){
        $conn = new PDO("mysql:host=adventurecraft.site;dbname=dptadven_shop","dptadven_adventure","Sqrtfl0@t01");
        return $conn;
    }
    function authme(){
        $conn = new PDO("mysql:host=adventurecraft.site;dbname=dptadven_authme","dptadven_adventure","Sqrtfl0@t01");
        return $conn;
    }
    
    function sendDiscordMessage($webhook,$message) {
		// Discord Webhook URL
		$webhook_url = $webhook;
	
		// Message data
		$data = array(
			'content' => $message
		);
	
		// Encode the message data in JSON format
		$json_data = json_encode($data);
	
		// Initialize cURL session
		$ch = curl_init($webhook_url);
	
		// Set the content type to application/json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	
		// Set the request method to POST
		curl_setopt($ch, CURLOPT_POST, 1);
	
		// Set the message data as the POST fields
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
	
		// Set cURL to return the response instead of printing it
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
		// Execute the cURL request
		$response = curl_exec($ch);
	
		// Check for errors
		if(curl_errno($ch)) {
			echo 'Curl error: ' . curl_error($ch);
		}
	
		// Close cURL session
		curl_close($ch);
	
		// Return the response from Discord (if needed)
		return $response;
	}
?>