<?php
include_once '../vendor/autoload.php';

$fullNode = new \TronSDK\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \TronSDK\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \TronSDK\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \TronSDK\Tron($fullNode, $solidityNode, $eventServer);
} catch (\TronSDK\Exception\TronException $e) {
    exit($e->getMessage());
}

//option 1
$tron->sendTransaction('to',0.1, 'hello');

//option 2
$tron->send('to',0.1);

//option 3
$tron->sendTrx('to',0.1);
