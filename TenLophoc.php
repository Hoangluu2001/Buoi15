<?php
function validateTheNameOfTheClass ($name){
    $pattern = '/^[ACP][0-9]{4,}+[GM]$/';
    if(preg_match($pattern,$name)){
        echo $name . " hop le . chung toi chap nhan no"."<br>";
    } else {
        echo $name . "khong hop le . vui long thu lai"."<br>";
    }
}
validateTheNameOfTheClass('C0318G');
validateTheNameOfTheClass('M0318G, P0323A');