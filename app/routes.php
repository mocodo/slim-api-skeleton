<?php

$app->get('/', function (\Slim\Http\Request $request, \Slim\Http\Response $response, $args) {
    $this->get('logger')->debug('Hello world');

    return $response->withJson([
        'hello' => 'world',
    ]);
});
