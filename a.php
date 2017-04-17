<?php
$json_string = file_get_contents("http://api.wunderground.com/api/7a7e5a57d3e99d78/geolookup/conditions/q/ID/Mugassari.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'location'}->{'city'}; 
$weather = $parsed_json->{'current_observation'}->{'weather'};
$wind_mph = $parsed_json->{'current_observation'}->{'wind_mph'};
$temp_c = $parsed_json->{'current_observation'}->{'temp_c'};
$visibility_km= $parsed_json->{'current_observation'}->{'visibility_km'};
echo "Saat ini sedang berada di ${location}\n";
echo "<br>";
echo "Cuaca saat ini : ${weather}\n";
echo "<br>";
echo "Suhu saat ini : ${temp_c} celcius\n";
echo "<br>";
echo "Kecepatan angin saat ini : ${wind_mph} mph \n";
echo "<br>";
echo "Jarak pandang : ${visibility_km} km\n";
?>