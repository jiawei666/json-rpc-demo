<?php
require 'vendor/autoload.php';

$url = 'http://json-rpc.myubuntu.com/server.php';
$client = new JsonRpc\Client($url);
$client->batchOpen();
$success = $client->call('add', [5, 2]);
$success1 = $client->call('subtract', [5, 2]);
$success2 = $client->call('plus', [5, 2]);
$success3 = $client->call('divide', [5, 2]);


var_dump($client->batchSend());
var_dump($client->error);
var_dump($client->result);
var_dump($client->batch);