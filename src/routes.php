<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/login', function (Request $request, Response $response, array $args) {
    //Log de mensagens
    $this->logger->info("Mystic-Labs '/login' route");
    
    
    
    //Render login view
    return $this->renderer->render($response, 'login.phtml', $args);
});
