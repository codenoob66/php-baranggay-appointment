<?php

if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('Direct access not permitted');
}

function generateRandom()
{
    $randomStr = '';
    $characterSet = "1234567890abcdefghijklmnopqrstuvwxyzQWERTYUIOPASDFGHJKLXCVZBNM";
    for ($i = 0; $i < 10; $i++) {
        $randomStr .= $characterSet[random_int(0, strlen($characterSet) - 1)];
    }

    return $randomStr;
}
