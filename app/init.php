<?php

require 'container.php';

if( !session_id() ) session_start();

$app = new \Slim\App($c);

require 'routes.php';