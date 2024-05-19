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
        $connection = new PDO("mysql:host=localhost;dbname=playerpoints","root","Sqrtfl0@t01");
        $data = $connection->query($command)->fetch();
        return $data;
        // "SELECT points FROM playerpoints_points INNER JOIN playerpoints_username_cache ON playerpoints_points.uuid = playerpoints_username_cache.uuid WHERE playerpoints_username_cache.username = '".$_SESSION["taiKhoan"]."'"
    }
    // sendDiscordMessage($discordWebhook["shopLog"],date('d/m/Y H:i:s')." » **AnTrc2** đã mua rank **Gold** thành công");
    if (isset($_POST["buyRank"])) {
        $username = $_SESSION["taiKhoan"];
        $rank = $_POST["rank"];
        $price = $_POST["price"];
        
        // Thực hiện các thao tác cần thiết với dữ liệu như lưu vào cơ sở dữ liệu hoặc xử lý chúng theo cách khác
        // Ví dụ: lưu dữ liệu vào cơ sở dữ liệu
        // $connection = new PDO("mysql:host=localhost;dbname=playerpoints","root","Sqrtfl0@t01");
        // $connection->query("INSERT INTO your_table_name (rank, price, time, donViThoiGian) VALUES ('$rank', '$price', '$time', '$donViThoiGian')");
        
        // Trả về thông báo hoặc kết quả cần thiết
        



        // console("luckperms:lp user ".$username." parent set ".$rank);
        
        if ($rank === "default"){
            $rank = "member";
            echo $_SESSION["taiKhoan"]." đã mua rank $rank thành công!";
        
        // console("playerpoints:p take ".$username." ".$price);
            sendDiscordMessage($discordWebhook["console"],"playerpoints:p take ".$username." ".$price);
            sendDiscordMessage($discordWebhook["shopLog"],date('d/m/Y H:i:s')." » **$username** đã mua rank **$rank** thành công");
            $rank = "default";
            sendDiscordMessage($discordWebhook["console"],"luckperms:lp user ".$username." parent set ".$rank);
        } else {
            echo $_SESSION["taiKhoan"]." đã mua rank $rank thành công!";
            sendDiscordMessage($discordWebhook["console"],"playerpoints:p take ".$username." ".$price);
            sendDiscordMessage($discordWebhook["shopLog"],date('d/m/Y H:i:s')." » **$username** đã mua rank **$rank** thành công");
            sendDiscordMessage($discordWebhook["console"],"luckperms:lp user ".$username." parent set ".$rank);
        }
        
    }
    if (isset($_POST["buyPet"])){
        $username = $_SESSION["taiKhoan"];
        $pet = $_POST["pet"];
        $price = $_POST["price"];
        echo "success";
        sendDiscordMessage($discordWebhook["console"],"playerpoints:p take ".$username." ".$price);
        sendDiscordMessage($discordWebhook["console"],"luckperms:lp user ".$username." parent set ".$pet);
    }
    // if (isset($_POST["login"]) && isset($_SESSION["taiKhoan"])){
    //     echo "true";
    // }
    // if (isset($_POST["point"]) && isset($_SESSION["taiKhoan"])){
    //     $data = sql("SELECT points FROM playerpoints_points INNER JOIN playerpoints_username_cache ON playerpoints_points.uuid = playerpoints_username_cache.uuid WHERE playerpoints_username_cache.username = '".$_SESSION["taiKhoan"]."'");
    //     echo $data["points"];
    // } else {
    //     echo "123456";
    // }


?>
