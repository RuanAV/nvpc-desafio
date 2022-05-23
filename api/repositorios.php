<?php

header('Content-type: application/json; charset=utf-8');

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.github.com/users/RuanAV/repos',
    CURLOPT_USERAGENT => 'Github API in CURL'
]);

$response = curl_exec($curl);

echo $response;


?>