<?php
require "vendor/autoload.php";
$access_token = 'INIvvL/LfQydi/k3bEPnlCCFLo1E3qDDn7MlyXY7If/I5WQsLPC9YATcozqq5lkfRT9OJw5B/3wm+0vmXz6j05XPh0aIFTkn95/fUlWU/ZQ3Yf4qfGymsUtSYVj8gyfGn852VLrJ89IEwvNJHT0XKgdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'bc33df0bbb259688d445ebee53846b76';
$pushID = 'U84949afd83aa60459e3968e556a762e3';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดีครับ เราเป็น Bot นะ ชื่อ พี่อ้วน เบอร์ติดต่อ 086383896');
$response = $bot->pushMessage($pushID, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
