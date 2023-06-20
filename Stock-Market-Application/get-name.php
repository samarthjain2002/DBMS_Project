<?php
require_once('includes/config.php');

$curl = curl_init();
$symbol = "INFY";

curl_setopt_array($curl, array(
	CURLOPT_URL => "http://api.marketstack.com/v1/tickers?access_key=1e1529d33fecdc70f6199f094110ebbc&symbols=AAPL",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 90,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET"
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if($err){
	echo "cURL Error :" . $err;
}else{
	//echo $response;
}

// convert the response to php array or object
$name = json_decode($response, true);
echo "<br><pre>";
print_r($name);
echo "</pre>";
//echo $array->data[0]->name;
print_r($name['data'][0]['name']);







?>