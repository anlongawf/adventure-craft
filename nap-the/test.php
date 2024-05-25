<?php
$content = "AnTrc2_skymixue"; // Content can include username and other info separated by "."
$seri = "20000277547232";
$pin = "924054157914860";
$loaithe = "Viettel";
$menhgia = "10000";
$username = "AnTrc2";
$apikey = "ADE576A843B7E9F42E600E6B5A84110F";
$url = "https://thesieutoc.net/chargingws/v2?APIkey=".$apikey."&mathe=".$pin."&seri=".$seri."&type=".$loaithe."&menhgia=".$menhgia."&content=".$content;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CAINFO, __DIR__ . '/curl-ca-bundle.crt');
curl_setopt($ch, CURLOPT_CAPATH, __DIR__ . '/curl-ca-bundle.crt');
$response = json_encode(curl_exec($ch));
?>
