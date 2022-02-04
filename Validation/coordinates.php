<?php

function validateFloat($value) : string
{
	if (!filter_var($value, FILTER_VALIDATE_FLOAT)) {
		return "ERROR: Type of value must be float!";
	} else {
		return "Type of value is correct! Thanks!";
	}
}

function validateMax($value, $max_value) : string
{
	if (strlen($value) >= $max_value) {
		return "ERROR: Too much characters  sent";
	} else {
		return "Max characters are OK";
	}
}
function validateMin($value, $min_value) : string
{
	if (strlen($value) <= $min_value) {
		return "ERROR: Too few characters sent";
	} else {
		return "Min characters  are OK";
	}
}

function validateInSquare($value, $last_point_1, $last_point_2)
{
	if ($last_point_1 >= $value && $value <= $last_point_2) {
		return "Ok. coordinates in my square(min value)!";
	} else {
		return "error 422 coordinates are outside my square";
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
$validate_message .= validateFloat($longitude);
$validate_message .= validateFloat($latitude);
$validate_message .= validateMin($longitude, 11);
$validate_message .= validateMin($latitude, 12);
$validate_message .= validateMax($longitude, 21);
$validate_message .= validateMax($latitude, 22);
$validate_message .= validateInSquare($longitude, $x1, $x2);
$validate_message .= validateInSquare($latitude, $y1, $y2);

return $validate_message;
}
$longitude = readline(' Please wtite the longitude: ');
$latitude = readline(' Please wtite the latitude: ');
echo validateCoordination($longitude, $latitude);