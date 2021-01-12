<?php


require 'vendor/autoload.php';

$methods = new \Src\Arithmetic();
$server = new JsonRpc\Server($methods);

$data = [
    "jsonrpc"=> "2.0",
    "method"=> "add",
    "params"=> ["a"=> 23, "b"=> 42],
    "id"=> 1
];
$input = file_get_contents('php://input');
$testInput = json_encode($data);
$server->receive($input ?: $testInput);