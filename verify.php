<?php
$access_token = 'jVNJkTlV/kFN79nrLrvOXW5kpx+ePre6Z/XQjfMrtjL/UmPxgT5mdN/QRG1jNyF8WeC0B50NQ8LCWVYetXiboRytKpLDIeIuNlQ+LFDb3Sb7S6DIzaqmJTmxaG57tHRxGjWxUKJjBqPlMlxVTczC+QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
