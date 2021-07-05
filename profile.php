<?php


$access_token = 'k/pcol5LYe+dzhf70fEsOmqSMUbWW4BMYv8rTqUB8ZpEIVMxmAEAS0xdAwWhgLQ0yanWJePqtvg866wxJsazgvBTqrjOWsM6RSaKFlspN2sY28/2bXSilI527iRoFSU32d3zH2fpKt/OVtWegbNJZgdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

