<?php
// replace the "demo" apikey below with your own key from https://www.alphavantage.co/support/#api-key

// $json = file_get_contents('https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=IBM&interval=5min&apikey=W74EZV4KUQ20A8YR');
// echo "$1";
// $data = json_decode($json,true);

// print_r($data);

// exit;
$ch = curl_init();
$url = "https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=IBM&interval=5min&apikey=W74EZV4KUQ20A8YR";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$resp = curl_exec($ch);
if($e = curl_error($ch)){
    echo $e;
}
else{
    $decoded = json_decode($resp,true);
    print_r($decoded);
   
}
curl_close($ch);