<?php

function checkPhone($str)
{
    $regex = '/^[0-9]{2}+(\-[0-9]{10}+)$/';
    if (preg_match($regex, $str)) {
        echo $str . " So dien thoai hop le" . '<br/>';
    } else {
        echo $str . " So dien thoai khong hop le" . '<br/>';
    }
}

checkPhone('84-0978489648');
checkPhone(' (a8)-(22222222)');