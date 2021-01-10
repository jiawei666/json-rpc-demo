<?php
require "vendor/autoload.php";

use AdvancedJsonRpc\Dispatcher;

class Argument
{
    public $aProperty;
}

class Target
{
    public function someMethod(Argument $arg)
    {
        var_dump($arg instanceof Argument);
        var_dump($arg->aProperty);
        // $arg instanceof Argument === true
        // $arg->aProperty === 123
        return 'Hello World';
    }
}

$dispatcher = new Dispatcher(new Target());

$result = $dispatcher->dispatch('
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "someMethod", 
        "params": {
            "arg": {"aProperty": 123}
        }
    }
');

var_dump($result);

// $result === "Hello World"
