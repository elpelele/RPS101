<?php
function randomMachine($n)
{
    $bytes = openssl_random_pseudo_bytes(1);
    $randomNumber = hexdec(bin2hex($bytes));
    return ($randomNumber <= $n) ? $randomNumber:randomMachine($n);
}