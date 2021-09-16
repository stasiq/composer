<h1>Composer</h1>
<?php
require_once '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Faker\Factory as Faker;
use Src\User;
use Src\Common\Helper;

$faker = Faker::create('ru_RU');

$user = new User($faker->name, $faker->phoneNumber);
$helper = new Helper;

dump($user);

$log = new Logger('EXAMPLE LOGGER');
dump($log);
$log->pushHandler(new StreamHandler('../logs/log.txt', Logger::WARNING));
$log->warning('EXAMPLE is WORKING');

