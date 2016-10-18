<?php
$access_token = 'eRw6IHTQDhW95l/lmzl30MrrqhvGjNbFjV2MXfmH1eAbqxmONKg6F2nRNdkiia5E5AnkswB2veFRK3/UahoY/n0NscZELjsfFIgc8vMP1OUG+hMmok+ZfnzmKZxNrF+vWa4kPk0ljEtZXVTriVJqbQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
