 <!DOCTYPE html>  
 <html>  
 <head><p>Our Weather</p>
 <title>Our Weather</title>  
 <body>
 <img src="https://icons.wxug.com/i/c/v4/mostlycloudy.svg" width="100" height="100"><br>
 
 <?php
$json_string = file_get_contents("http://api.wunderground.com/api/7a7e5a57d3e99d78/geolookup/conditions/q/ID/Mugassari.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'location'}->{'city'}; 
$weather = $parsed_json->{'current_observation'}->{'weather'};
$wind_mph = $parsed_json->{'current_observation'}->{'wind_mph'};
$temp_c = $parsed_json->{'current_observation'}->{'temp_c'};
$visibility_km= $parsed_json->{'current_observation'}->{'visibility_km'};
echo "<font size=7><B>${location}\n</B></font>";
echo "<br>";
echo "Cuaca saat ini : ${weather}\n";
echo "<br>";
echo "Suhu saat ini : ${temp_c} celcius\n";
echo "<br>";
echo "Kecepatan angin : ${wind_mph} mph \n";
echo "<br>";
echo "Jarak pandang : ${visibility_km} km\n";
?>

 </body>  
 </html>  