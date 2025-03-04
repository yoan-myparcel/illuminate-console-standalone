<?php

declare(strict_types=1);

use App\ExampleCommand;
use Illuminate\Console\Application;
use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;

require_once __DIR__ . '/vendor/autoload.php';

$container = new Container();
$events = new Dispatcher($container);
$application = new Application($container, $events, '1.0.0');
$application->setName('illuminate/console: Standalone Demo');
$application->resolve(new ExampleCommand());
$application->run();
