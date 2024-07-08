<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once '../backend/controller/shorter.php';
require_once '../backend/controller/user.php';

# VIEW
// $app->post('/f/h', 'ShorterController::homepage');


# BACKEND
## USER
$app->post('/u/c', 'UserController::create');
$app->post('/u/r', 'UserController::read');
$app->patch('/u/u', 'UserController::update');
$app->delete('/u/d', 'UserController::delete');

## SHORTER
$app->get('/s/c', 'ShorterController::create');
$app->get('/s/r', 'ShorterController::read');
$app->get('/s/u', 'ShorterController::update');
$app->get('/s/d', 'ShorterController::delete');

# FORBIDDENS
$app->get('/s/a/{forbiddens}', function () {});

# REDIRECT
$app->get('/{shorturl}', 'ShorterController::redirectShort');