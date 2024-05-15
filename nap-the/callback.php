<?php
function sendDiscordMessage($message) {
	// Discord Webhook URL
	$webhook_url = 'https://discord.com/api/webhooks/1222553457223925862/xLgO86ooj08u8b90eG0-IcAFWkxPU63pJw6Ktlrnth75KySsKVWrCvG_QhyYhdMGTYPI';

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
// include(__DIR__ ."/api/config.php");
	$validate = ValidateCallback($_POST);
	if($validate != false) { //Nếu xác thực callback đúng thì chạy vào đây.
		echo "a";
		$status = $validate['status']; //Trạng thái thẻ nạp, thẻ thành công = thanhcong , Thẻ sai, thẻ sai mệnh giá = thatbai
		$serial = $validate['serial']; //Số serial của thẻ.
		$pin = $validate['pin']; //Mã pin của thẻ.
		$card_type = $validate['card_type']; //Loại thẻ. vd: Viettel, Mobifone, Vinaphone.
		$amount = $validate['amount']; //Mệnh giá của thẻ. nếu bạn sài thêm hàm sai mệnh giá vui lòng sử dụng thêm hàm này tự cập nhật mệnh giá thật kèm theo desc là mệnh giá củ
		$real_amount = $validate['real_amount']; // thực nhận đã trừ chiết khấu
		$content = $validate['content']; // id transaction 
		// $result = $conn->query("SELECT * FROM `trans_log` WHERE status = 0 AND trans_id = '{$content}' AND pin = '{$pin}' AND seri = '{$serial}' AND type = '{$card_type}'");
		if ($status == "thanhcong"){
			sendDiscordMessage("playerpoints:p give ".$username." ".(intval($amount)/1000));
		}
// if ($result->num_rows > 0){
//     $result = $result->fetch_array(MYSQLI_ASSOC);
// 	print_r($result);
// 	if($status == 'thanhcong') {
// 			// sendDiscordMessage();
// 			//Xử lý nạp thẻ thành công tại đây.
// 			// $conn->query("UPDATE `trans_log` SET `status` = 1 WHERE `id` = {$result['id']}"); // chuyển cho kết quả thành công      
// 		} else if($status == 'saimenhgia') {
// 			//Xử lý nạp thẻ sai mệnh giá tại đây.
//         //    $conn->query("UPDATE `trans_log` SET status = 3, `amount` = {$amount} WHERE `id` = {$result['id']}"); // thất bại   
// 		} else {
// 			//Xử lý nạp thẻ thất bại tại đây.
//         //    $conn->query("UPDATE `trans_log` SET status = 2 WHERE `id` = {$result['id']}"); // thất bại   
// 		}
		
// 		# Lưu log Nạp Thẻ 
// 		// $file = "card.log";
//         // $fh = fopen($file,'a') or die("cant open file");
// 	    // fwrite($fh,"Tai khoan: ".$result['name'].", data: ".json_encode($_POST));
// 	    // fwrite($fh,"\r\n");
//         // fclose($fh);
// 	}
	} else {
		echo "b";
	}

function ValidateCallback($out) { //Hàm kiểm tra callback từ sever
	if(isset(
		$out['status'],
		$out['serial'],
		$out['pin'],
		$out['card_type'],
		$out['amount'],
		$out['content'],
		$out['real_amount']
		)) {
		return $out; //xác thực thành công, return mảng dữ liệu từ sever trả về.
		
	} else {
		return false; //Xác thực callback thất bại.
		
	}
}