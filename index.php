<?php
require __DIR__ . '/vendor/autoload.php';
use Pimple\Container;
use MB\PersonService;
use MB\PersonDao;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

$container = new Container();
$container['personDao'] = function($c) {
    return new PersonDao();
};

$container['personService'] = function($c) {
    return new PersonService($c['personDao']);
};

$result = $container['personService']->getPerson(1);
var_dump($result);
