<?php
function randomMachine($n,$l)
{
    $bytes = openssl_random_pseudo_bytes($l);
    $randomNumber = hexdec(bin2hex($bytes));
    return ($randomNumber <= $n) ? $randomNumber:randomMachine($n,$l);
}cd