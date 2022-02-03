<?php

function validateLongitudeFloat($longitude) : string
{
	if (!is_float($longitude)) {
		return "ERROR: Type of longitude must be float!";
	} else {
		return "Type of longitude is correct! Thanks!";
    }
    echo '<br>';

function validateLatitudeFloat($latitude){
    if (!is_float($latitude)) {
		return "ERROR: Type of latitude must be float!";
	} else {
		return "Type of latitude is correct! Thanks!";
    }
    }
}
    echo '<br>';

function validateMin($longitude, $latitude, $min_value) : string
{
	if ($longitude <= $min_value) {
		return "ERROR: Too few characters of longitude sent";
	} else {
		return "Min characters of longitude are OK";
    }
    echo '<br>';
    if ($latitude <= $min_value) {
		return "ERROR: Too few characters of latitude sent";
	} else {
		return "Min characters of latitude are OK";
    }
}

echo '<br>';

function validateMax($longitude, $latitude, $max_value) : string
{
	if ($longitude >= $max_value) {
		return "ERROR: Too much characters of longitude sent";
	} else {
		return "Max characters of longitude are OK";
    }
    echo '<br>';
    if ($latitude >= $max_value) {
		return "ERROR: Too much characters of latitude  sent";
	} else {
		return "Max characters of latitude are OK";
	}
echo '<br>';


function validateSquareMinValue($longitude, $latitude, $x1, $y1){

if ($longitude <= $x1 || $latitude<=$y1) { 
   return "error 422 coordinates are outside my square";
}
    return "Ok. coordinates in my square(min value)!";
}

echo '<br>';

function validateSquareMaxValue($longitude, $latitude, $x2, $y2){
    if ($longitude >= $x2 || $latitude>=$y2 ) {
        return "error 422 coordinates are outside my square";
    }
        return "Ok. coordinates in my square(max value)!";
    }
}

function validateCoordination($longitude, $latitude){
echo "Longitude coordination : " . $longitude;
echo ' <br>';
echo "Latitude coordination : " . $latitude;
echo ' <br>';

$validate_message = "";
$validate_message .= validateLongitudeFloat($longitude);
$validate_message .= validateLatitudeFloat($latitude);
$validate_message .= validateMin($longitude, $latitude, 0);
$validate_message .= validateMax($longitude, $latitude, 555.555);
$validate_message .= validateSquareMinValue($longitude, $latitude, 122.122, 455.455);
$validate_message .= validateMax($longitude, $latitude, 233.233, 566.566);
return $validate_message;
}

$longitude = 123.123;
$latitude = 456.456;
echo validateCoordination($longitude, $latitude);
