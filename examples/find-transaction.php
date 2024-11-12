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

$detail = $tron->getTransaction('TxId');
var_dump($detail);