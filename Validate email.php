<?php


function validateEmail($Email)
{
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($pattern, $Email)) {
        echo $Email . " is a valid account. We can accept it." . "<br>";
    } else {
        echo $Email . " is an invalid account. Please try again." . "<br>";
    }
}

validateEmail('a@gmail.com');
validateEmail('@gmail.com');