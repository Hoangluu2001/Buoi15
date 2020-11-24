<?php


function validateEmail($Email)
{
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($pattern, $Email)) {
        echo $Email . " hop le . We can accept it." . "<br>";
    } else {
        echo $Email . " khong hop le . Please try again." . "<br>";
    }
}

validateEmail('a@gmail.com');
validateEmail('@gmail.com');