<?php
include_once '../vendor/autoload.php';

use TronSDK\Provider\HttpProvider;
use TronSDK\Tron;

$fullNode = new HttpProvider('https://api.trongrid.io');
$solidityNode = new HttpProvider('https://api.trongrid.io');
$eventServer = new HttpProvider('https://api.trongrid.io');
$privateKey = 'private_key';

//Example 1
try {
    $tron = new Tron($fullNode, $solidityNode, $eventServer, $privateKey);
} catch (\TronSDK\Exception\TronException $e) {
    die($e->getMessage());
}