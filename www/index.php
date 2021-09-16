<h1>Composer</h1>
<?php

include('vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Faker\Factory as Faker;
use Src\User;

$faker = Faker::create('ru_RU');

$user = new User($faker->name, $faker->phoneNumber);

dump($user);

$log = new Logger('logs');
$log->pushHandler(new StreamHandler('logs/log.log', Logger::WARNING));

$log->warning('Warning!');
$log->error('Error!');