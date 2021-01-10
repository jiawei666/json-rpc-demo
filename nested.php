<?php
require "vendor/autoload.php";

use AdvancedJsonRpc\Dispatcher;

class TextDocumentManager
{
    public function didOpen(string $uri)
    {
        return 'Thank you for this information';
    }
}

class LanguageServer
{
    public $textDocument;

    public function __construct()
    {
        $this->textDocument = new TextDocumentManager();
    }
}

$dispatcher = new Dispatcher(new LanguageServer(), '/');

$result = $dispatcher->dispatch('
    {
        "jsonrpc": "2.0",
        "id": 1,
        "method": "textDocument/didOpen", 
        "params": {
            "uri": "file:///c/Users/felix/test.php"
        }
    }
');

// $result === "Thank you for this information"