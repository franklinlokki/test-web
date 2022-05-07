<?php


function get_solde(): float{
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . "Login" . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "main_solde.txt";
    return (float)file_get_contents($file);
}

function set_solde(float $new_solde): void{
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . "Login" . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "main_solde.txt";
    file_put_contents($file, $new_solde);
}




