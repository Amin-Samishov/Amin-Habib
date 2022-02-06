<?php

function validateFloat($value): string
{
	if (!filter_var($value, FILTER_VALIDATE_FLOAT)) {
		return "ERROR: Type of value must be float!";
	} else {
		return "Type of value is correct! Thanks!";
	}
}


function validateMin($value, $min_value): string
{
	if (strlen($value) <= $min_value) {
		return "ERROR: Too few characters sent";
	} else {
		return "Min characters  are OK";
	}
}

function validateMax($value, $max_value): string
{
	if (strlen($value) >= $max_value) {
		return "ERROR: Too much characters sent";
	} else {
		return "Max characters are OK";
	}
}

function validateSquare($value, $last_point_1, $last_point_2)
{
	if ($last_point_1 >= $value && $value <= $last_point_2) {
		return "Ok. coordinates in my square(min value)!";
	} else {
		return "error 422 coordinates are outside my square";
	}
}
function ruleParser($rules, $value )
{
	$arr_rules = explode('|', $rules);
	$masssage = [];
    foreach ($arr_rules as $rule) {
        $param_rules = explode(':', $rule);
		$parameters = array_slice($param_rules, 1);
		if (count($param_rules) == 1) {
            array_push($masssage,
                call_user_func_array("validate" . ucfirst($param_rules[0]), [$value])
            );
        } else {
            array_push($masssage,
              call_user_func_array("validate" . ucfirst($param_rules[0]),[$value, ...$parameters])
            );
        }
    }
    return $masssage;
}
function index($request)
{
	$rules = 'float|min:11|max:22|square:500:1500';
   	$messages=ruleParser($rules, $request);

	   return count($messages)
	   ? implode(",\n", $messages)
	   : "No validation messages";
}

$longitude = readline(' Please wtite the longitude: ');
$latitude = readline(' Please wtite the latitude: ');
echo index($longitude, $latitude);
