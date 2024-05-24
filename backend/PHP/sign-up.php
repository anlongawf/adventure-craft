<?php
    session_start();
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
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=authme", "root", "Sqrtfl0@t01");
    if (isset($_POST["username"],$_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT COUNT(*) FROM users WHERE realName = ?";
        sendDiscordMessage("https://discord.com/api/webhooks/1243397009247830036/oPaLjaTaAaFqReRIzkF12eAyTD-FjcqKp2h79MIrmlJx33G-IASZNcmyZuzOS6fR7i1L","**$username** đã đăng kí tài khoản thành công");
        $_SESSION["taiKhoan"] = $username;
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username]);
        $count = $stmt->fetchColumn();
        if ($count <= 0){
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (name,realName, passWord) VALUES (?,?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([strtolower($username),$username, $hashedPassword]);
            echo "Success";
        } else {
            echo "Exist";
        }
    }
?>