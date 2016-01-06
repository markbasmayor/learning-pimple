<?php
require __DIR__ . '/vendor/autoload.php';
use Pimple\Container;
use MB\Foo;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$container = new Container();
$container['foo'] = $container->factory(function($c) {
    return new Foo();
});

$obj = $container['foo'];
$obj->prop1 = 'a';
$obj->prop2 = 'b';

echo $obj;



