<?php

$a = 9;

function checkEven($a)
{
    if ($a % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

if (checkEven($a) == true) {
    echo "a la so chan";
} else {
    echo "a la so le";
}
