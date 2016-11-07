<?php
$jsonurl = "http://api.wunderground.com/api/a914fd0efd3984de/geolookup/conditions/forecast/q/Finland/Helsinki.json";
$json = file_get_contents($jsonurl);
echo json_decode($json, true)["forecast"]["simpleforecast"]["forecastday"][0]["pop"];
?>