# TRON API
A PHP API for interacting with the Tron Protocol

[![Latest Stable Version](https://poser.pugx.org/paulorlima9/tron-sdk/version)](https://packagist.org/packages/paulorlima9/tron-sdk)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://api.travis-ci.com/paulorlima9/tron-sdk.svg?branch=master)](https://travis-ci.com/paulorlima9/tron-sdk)
[![Contributors](https://img.shields.io/github/contributors/paulorlima9/tron-sdk.svg)](https://github.com/paulorlima9/tron-sdk/graphs/contributors)
[![Total Downloads](https://img.shields.io/packagist/dt/paulorlima9/tron-sdk.svg?style=flat-square)](https://packagist.org/packages/paulorlima9/tron-sdk)

## Install

```bash
> composer require paulorlima9/tron-sdk --ignore-platform-reqs
```
## Requirements

The following versions of PHP are supported by this version.

* PHP 7.4

## Example Usage

```php
use TronSDK\Tron;

$fullNode = new \TronSDK\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \TronSDK\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \TronSDK\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \TronSDK\Tron($fullNode, $solidityNode, $eventServer);
} catch (\TronSDK\Exception\TronException $e) {
    exit($e->getMessage());
}


$this->setAddress('..');
//Balance
$tron->getBalance(null, true);

// Transfer Trx
var_dump($tron->send('to', 1.5));

//Generate Address
var_dump($tron->createAccount());

//Get Last Blocks
var_dump($tron->getLatestBlocks(2));

//Change account name (only once)
var_dump($tron->changeAccountName('address', 'NewName'));


// Contract
$tron->contract('Contract Address');


```

## Testing

``` bash
$ vendor/bin/phpunit
```
