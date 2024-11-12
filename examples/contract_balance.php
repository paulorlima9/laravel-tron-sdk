<?php
$fullNode = new \TronSDK\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \TronSDK\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \TronSDK\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \TronSDK\Tron($fullNode, $solidityNode, $eventServer);
} catch (\TronSDK\Exception\TronException $e) {
    exit($e->getMessage());
}


$balance=$tron->getTransactionBuilder()->contractbalance($tron->getAddress);
foreach($balance as $key =>$item)
{
	echo $item["name"]. " (".$item["symbol"].") => " . $item["balance"] . "\n";
}

