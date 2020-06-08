<?php

$url = 'http://api.openweathermap.org/data/2.5/weather';


if (isset($_POST['submit'])){
    // Get name of the city
    $city = $_POST['city'];

    // API config
    $options = array(
        'q' => $city,
        'APPID' => '0a2e60e8cd7011a8e65a0eab7575c539',
        'units' => 'metric',
        'lang' => 'en',
    );

    // Building request
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url  . '?' . http_build_query($options));

    // JSON to php array
    $response = curl_exec($ch);
    $data = json_decode($response, true);

    curl_close($ch);
}
