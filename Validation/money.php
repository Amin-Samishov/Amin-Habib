<?php

function validateInt($money_in_cents)
{
    if (!is_int($money_in_cents))
    {
        return "Error! Unsuitable data type";
    }

    return "OK! 200. Money in cents: ".$money_in_cents;
}

function validateMin($money_in_cents, $min_value)
{
    if ($money_in_cents <= $min_value)
    {
        return "ERROR! This amount of money is not enough";
    }
    return "OK! 200. Money minimum: ".$money_in_cents;
}

function validateMax($money_in_cents, $max_value)
{
    if ($money_in_cents >= $max_value) {
        return "ERROR! This amount of money is a lot";
    }
    return "OK! 200. Money maximum: ".$money_in_cents;
}

function validate($rules, $request)
{
    $message = [];
    $rules_in_array = explode("|", $rules);
    foreach ($rules_in_array as $rule)
    {
        $value =  explode(":", $rule);
        if ($value[0]=="int"){
            array_push($message, call_user_func_array("validate".ucfirst($value[0]), [$request]));
        }else{
            array_push($message, call_user_func_array("validate".ucfirst($value[0]), [$request, $value[1]]));
        }
    }
    return $message;
}

function index($request, $sender_account_number, $recipient_account_number)
{

    echo "Sender's account number: $sender_account_number<br>";
    echo "Recipient's account number: $recipient_account_number<br>";
    $rules = "int|min:100000|max:10000000";
    $messages = validate($rules, $request);

    return count($messages)
        ? implode("<br>", $messages)
        : 'No Validation messages';
}
$request = 250000;
$sender_account_number = 4276802156936452;
$recipient_account_number = 6276081265936423;
echo index($request, $sender_account_number, $recipient_account_number);
