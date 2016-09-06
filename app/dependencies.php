<?php

$container = $app->getContainer();

/*
|--------------------------------------------------------------------------
| Logger
|--------------------------------------------------------------------------
*/
$container['logger'] = function ($c) {
    /** @var \Interop\Container\ContainerInterface $c */
    $settings = $c->get('settings')['logger'];

    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));

    return $logger;
};