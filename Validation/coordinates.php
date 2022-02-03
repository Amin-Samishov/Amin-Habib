<?php

function validateLongitudeFloat($longitude) : string
{
	if (!filter_var($longitude, FILTER_VALIDATE_FLOAT)) {
		return "ERROR: Type of longitude must be float!";
	} else {
		return "Type of longitude is correct! Thanks!";
    }
    echo '<br>';
}
	function validateLatitudeFloat($latitude) : string{
    if (!filter_var($latitude, FILTER_VALIDATE_FLOAT)) {
		return "ERROR: Type of latitude must be float!";
	} else {
		return "Type of latitude is correct! Thanks!";
    }
    }

    echo '<br>';

function validateLongtitudeCount($longitude, $min_value, $max_value) : string
{
	if (strlen($longitude) <= $min_value) {
		return "ERROR: Too few characters of longitude sent";
	} else {
		return "Min characters of longitude are OK";
    }
    echo '<br>';
    if (strlen($longitude) >= $max_value) {
		return "ERROR: Too much characters of longitude sent";
	} else {
		return "Max characters of longitude are OK";
    }
}

function validateLatitudeCount($latitude, $min_value, $max_value) : string
{
	if (strlen($latitude) <= $min_value) {
		return "ERROR: Too few characters of latitude sent";
	} else {
		return "Min characters of latitude are OK";
    }
    echo '<br>';
    if (strlen($latitude) >= $max_value) {
		return "ERROR: Too much characters of latitude  sent";
	} else {
		return "Max characters of latitude are OK";
	}
echo '<br>';


function validateInSquareLongitude($longitude, $x1, $x2){

if ($longitude <= $x1 || $longitude >=$x2) { 
   return "error 422 longitude's coordinates are outside my square";
}
    return "Ok. longitude's coordinates in my square(min value)!";
}

echo '<br>';

function validateInSquareLatitude( $latitude, $y1, $y2){
    if ($latitude <= $y1 || $latitude>=$y2 ) {
        return "error 422 latitude's coordinates are outside my square";
    }
        return "Ok. latitude's coordinates in my square(max value)!";
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
$validate_message .= validateLongtitudeCount($longitude, 0, 234.234);
$validate_message .= validateLatitudeCount( $latitude, 0, 666.666);
$validate_message .= validateInSquareLongitude($longitude, 500, 1500);
$validate_message .= validateInSquareLatitude( $latitude, 700, 2100);
return $validate_message;
}

$longitude = readline(' Please wtite the longitude: ');
$latitude = readline(' Please wtite the latitude: ');
echo validateCoordination($longitude, $latitude);
