<?php

require __DIR__.'/vendor/autoload.php';

$cont = 0;
$loop = React\EventLoop\Factory::create();
$loop->addPeriodicTimer(1, function() {
    echo 'Tick'.PHP_EOL;
});

$loop->run();
