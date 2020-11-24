<?php

function validateaccount($count)
{
    $pattern = '/^[_a-z0-9]{6,}$/';
    if (preg_match($pattern, $count)) {
        echo $count . " is a valid account. We can accept it." . "<br>";
    } else {
        echo $count . " is an invalid account. Please try again." . "<br>";
    }
}

validateaccount('123abc_');
validateaccount('_abc123');
validateaccount('______');
validateaccount('123456');
validateaccount('abcdefg');
validateaccount('.@');
validateaccount('12345');
validateaccount('1234_');
validateaccount('abcde');