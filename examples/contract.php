<?php

include_once '../vendor/autoload.php';

use TronSDK\Tron;


try {
    $fullNode = new \TronSDK\Provider\HttpProvider('https://api.trongrid.io');
    $solidityNode = new \TronSDK\Provider\HttpProvider('https://api.trongrid.io');
    $eventServer = new \TronSDK\Provider\HttpProvider('https://api.trongrid.io');
} catch (\TronSDK\Exception\TronException $e) {
    echo $e->getMessage();
}


try {
    $tron = new Tron($fullNode, $solidityNode, $eventServer, null, true);
    $contract = $tron->contract('TR7NHqjeKQxGTCi8q8ZY4pL8otSzgjLj6t');  // Tether USDT https://tronscan.org/#/token20/TR7NHqjeKQxGTCi8q8ZY4pL8otSzgjLj6t

    // Data
    echo $contract->name();
    echo $contract->symbol();
    echo $contract->balanceOf();
    echo $contract->totalSupply();
    //echo  $contract->transfer('to', 'amount', 'from');


} catch (\TronSDK\Exception\TronException $e) {
    echo $e->getMessage();
}