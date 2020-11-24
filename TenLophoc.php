<?php

$regex = "/^(C|A|P)[0-9]{4}(G|H|I|K|L|M)$/";

//$class = "C0318G";
$class = "M0318G";
$class = "C0318G";

echo (preg_match($regex, $class));