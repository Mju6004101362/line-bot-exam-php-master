<?php



require "vendor/autoload.php";

$access_token = 'k/pcol5LYe+dzhf70fEsOmqSMUbWW4BMYv8rTqUB8ZpEIVMxmAEAS0xdAwWhgLQ0yanWJePqtvg866wxJsazgvBTqrjOWsM6RSaKFlspN2sY28/2bXSilI527iRoFSU32d3zH2fpKt/OVtWegbNJZgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'Ub66b4fc7ab1b840e8f5360e15e37ee34';

$pushID = '@875biedj';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







