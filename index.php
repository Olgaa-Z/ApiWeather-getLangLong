<?php

// MELIHAT WEATHER BERDASARKAN LATITUDE LONGITUDE

$city_name= 'Yogyakarta';
$api_key= 'bdbd1343ad91bd7f179dd2b0b23ce20f';
$lat = -7.797068;
$lon = 110.370529;

// $api_url2 = 'https://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;
$api_url = 'https://api.openweathermap.org/data/2.5/weather?lat='.$lat.'&lon='.$lon.'&appid='.$api_key;

$weather_data = json_decode(file_get_contents($api_url), true);

$weather_ = file_get_contents($api_url);
echo $weather_;

$temperature = $weather_data['main']['temp'];
$temperature_in_celcius = round($temperature - 273.15);
$temperature_current_icon=$weather_data['weather'][0]['icon'];

echo "The Current Temperature in Yogyakarta is ".$temperature_in_celcius." Celcius";
echo "<img src='http://openweathermap.org/img/wn/".$temperature_current_icon."@2x.png'/>";

?>