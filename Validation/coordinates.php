<?php

function validateFloat($longitude, $latitude) : string
{
	if (!filter_var($longitude, FILTER_VALIDATE_FLOAT)) {
		return "ERROR: Type of longitude must be float!";
	} else {
		return "Type of longitude is correct! Thanks!";
    }
    echo '<br>';

    if (!filter_var($latitude, FILTER_VALIDATE_FLOAT)) {
		return "ERROR: Type of latitude must be float!";
	} else {
		return "Type of latitude is correct! Thanks!";
    }
    }

    echo '<br>';

function validateCount($longitude, $latitude, $min_value, $max_value) : string
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

if ($longitude >= $x1 || $longitude <= $x2) { 
	return "Ok. longitude's coordinates in my square(min value)!";
}
return "error 422 longitude's coordinates are outside my square";
}

echo '<br>';

function validateInSquareLatitude( $latitude, $y1, $y2){
    if ($latitude >= $y1 || $latitude <= $y2 ) {
		return "Ok. latitude's coordinates in my square(max value)!";
	}
	return "error 422 latitude's coordinates are outside my square";
    }
}

function validateCoordination($longitude, $latitude){
echo "Longitude coordination : " . $longitude;
echo ' <br>';
echo "Latitude coordination : " . $latitude;
echo ' <br>';
$x1 = 500;
$x2 = 700;
$y1 = 1500;
$y2 = 2100;
$validate_message = "";
$validate_message .= validateFloat($longitude, $latitude);
$validate_message .= validateCount($longitude, $latitude, 0, 10000);
$validate_message .= validateInSquareLongitude($longitude, $x1, $x2);
$validate_message .= validateInSquareLatitude( $latitude, $y1, $y2);

return $validate_message;
}

$longitude = readline(' Please wtite the longitude: ');
$latitude = readline(' Please wtite the latitude: ');
echo validateCoordination($longitude, $latitude);
