<?php

function moneyTransfer($money_in_cents, $sender_account_number, $recipient_account_number)
{
    echo "Sender's account number: $sender_account_number.\n";
    echo "Recipient's account number:  $recipient_account_number.\n";

    $max = 100000000; //Деньги в центах
    $min = 100000;    //Деньги в центах

    if (!is_int($money_in_cents))
    {
        return "Error! Unsuitable data type";
    }

    if ($money_in_cents >= $max)
    {
        return "ERROR! This amount of money is a lot";
    }

    if ($money_in_cents < $min)
    {
        return "ERROR! This amount of money is not enough";
    }
    return "No errors detected! OK 200";
}
echo moneyTransfer(200000, 6238510246987325, 4325017646382325);