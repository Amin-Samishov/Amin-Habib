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
    if ($money_in_cents < $min_value)
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

function validateTransfer($money_in_cents, string $sender_account_number, string $recipient_account_number)
{
    echo "Sender's account number: ".$sender_account_number;
    echo "<br>";
    echo "Recipient's account number: ".$recipient_account_number;
    echo "<br>";

    $validate_message = "";
    $validate_message .= validateInt($money_in_cents);
    $validate_message .= validateMin($money_in_cents, 100000);
    $validate_message .= validateMax($money_in_cents, 10000000);
    return "$validate_message";
}

$money_in_cents = 250000;
$sender_account_number = 4276802156936452;
$recipient_account_number = 6276081265936423;
echo validateTransfer($money_in_cents, $sender_account_number, $recipient_account_number);