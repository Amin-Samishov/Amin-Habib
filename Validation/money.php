<?php

function validateType($money_in_cents, $sender_account_number, $recipient_account_number)
{
    echo "Sender's account number: $sender_account_number";
    echo "<br>";
    echo "Recipient's account number:  $recipient_account_number";
    echo "<br>";

    if (!is_int($money_in_cents))
    {
        return "Error! Unsuitable data type";
    }

    return "OK! 200. Money in cents: ".$money_in_cents;
}


function validateMax($money_in_cents, $max_value)
{
    if ($money_in_cents >= $max_value) {
        return "ERROR! This amount of money is a lot";
    }
    return "OK! 200. Money within the maximum: ".$money_in_cents;
}

function validateMin($money_in_cents, $min_value)
{
    if ($money_in_cents < $min_value)
    {
        return "ERROR! This amount of money is not enough";
    }
    return "OK! 200. Money within the minimum: ".$money_in_cents;
}

echo validateType(2500000, 6085431297834617, 4158420396874917);
echo "<br>";
echo validateMax(9000000, 10000000);
echo "<br>";
echo validateMin(150000, 100000);