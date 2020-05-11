<?php


echo 'hello';

//require __DIR__ . '/vendor/autoload.php';

$url = 'https://developers.zomato.com/api/v2.1/categories';
$apiKey = 'eee502eb6e4a9c85ea7a8fc00468c7bc';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'Accept: application/json',
  'user-key: eee502eb6e4a9c85ea7a8fc00468c7bc',
  'response-key: https://developers.zomato.com/api/v2.1/categories'
]);

$response = curl_exec($curl);
//echo $response;


$result = json_decode($response, true);
echo ($result);

?>
