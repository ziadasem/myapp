<?php
$url = 'http://testwebapi.justdevelopmentjo.com/api/AlmozenRegistry/SaveMozenRegistry';
$data = array(
    "id" => "16232323",
    "message" => "3434" ,
);
$payload = json_encode($data);
echo ($payload);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);


curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
  //  'Content-Length: ' . strlen($payload)
    )
);


$result = curl_exec($ch);

if ($result == FALSE){
    echo "curl error" .curl_error($ch);
}

print_r($result);

curl_close($ch);

?>
