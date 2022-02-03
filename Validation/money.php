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

function validateMax($money_in_cents, $a, $max_value)
{
    if ($money_in_cents >= $max_value) {
        return "ERROR! This amount of money is a lot";
    }
    return "OK! 200. Money maximum: ".$money_in_cents;
}

function validate($rules, $request, $min_value, $max_value)
{
    $message = [];
    $rules_in_array = explode("|", $rules);
    foreach ($rules_in_array as $rule)
    {
        array_push($message, call_user_func_array("validate".ucfirst($rule), [$request, $min_value, $max_value]));

    }
    return $message;
}

function index($request, $min_value, $max_value, $sender_account_number, $recipient_account_number)
{

    echo "Sender's account number: $sender_account_number<br>";
    echo "Recipient's account number: $recipient_account_number<br>";
    $rules = "int|max|min";
    $messages = validate($rules, $request, $min_value, $max_value);

    return count($messages)
        ? implode("<br>", $messages)
        : 'No Validation messages';
}
$request = 250000;
$min_value = 100000;
$max_value = 10000000;
$sender_account_number = 4276802156936452;
$recipient_account_number = 6276081265936423;
echo index($request, $min_value, $max_value, $sender_account_number, $recipient_account_number );
