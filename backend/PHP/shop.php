<?php
    session_start();
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $discordWebhook = ["console" =>"https://discord.com/api/webhooks/1241391313878913024/09dsPMRgXCokKh69J7Ulblu3772m5FKiqKD4aS5iwpesJPdRfQddhBq7ObW1uUPkXshW","shopLog"=>"https://discord.com/api/webhooks/1241390234701135963/X3aKvOMZzvcsc7h_wJ_5o5lfnR5u7aN3QMNZPuTgyuSV_s21x0CKv1WDSphxqZu_DEKJ"];
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
    
    function sql($command){
        $connection = new PDO("mysql:host=103.237.87.46;dbname=playerpoints","antrc2","Sqrtfl0@t01");
        $data = $connection->query($command)->fetch();
        return $data;
    }
	function shop($command){
		$connection = new PDO("mysql:host=103.237.87.46;dbname=shop","antrc2","Sqrtfl0@t01");
        $data = $connection->query($command);
        return $data;
	}
    if (isset($_POST["buyRank"])) {
		$group = $_POST['buyRank'];
		$result = shop("SELECT * FROM shoprank WHERE rank_group = '$group'")->fetch();
		$nameRank = $result['rank_nameRank'];
		$price = $result['rank_price'];
        $username = $_SESSION["taiKhoan"];
		
        sendDiscordMessage($discordWebhook["console"],"playerpoints:p take ".$username." ".$price);
        sendDiscordMessage($discordWebhook["shopLog"],date('d/m/Y H:i:s')." » **$username** đã mua rank **$nameRank** thành công");
        sendDiscordMessage($discordWebhook["console"],"luckperms:lp user ".$username." parent addtemp ".$group." 30d");
		echo "success";
        
        
    }
    if (isset($_POST["buyPet"])){
        $username = $_SESSION["taiKhoan"];
        $pet = $_POST["pet"];
        $price = $_POST["price"];
        echo "success";
        sendDiscordMessage($discordWebhook["console"],"playerpoints:p take ".$username." ".$price);
		sendDiscordMessage($discordWebhook["shopLog"],date('d/m/Y H:i:s')." » **$username** đã mua pet **$pet** thành công");
        sendDiscordMessage($discordWebhook["console"],"luckperms:lp user ".$username." parent set ".$pet);
    }

?>
