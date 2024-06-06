<?php 

require_once __DIR__ . '/../../../vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount(__DIR__ . '/azureblade-php-firebase-adminsdk-mbby5-5b2fb96b37.json')
    ->withDatabaseUri('https://azureblade-php-default-rtdb.europe-west1.firebasedatabase.app/');

$database = $factory->createDatabase();