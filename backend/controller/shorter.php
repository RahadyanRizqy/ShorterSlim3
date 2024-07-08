<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


class ShorterController {
    // static function index(Request $request, Response $response) {
    //     if( $_SESSION['email'] ) {

    //         $file = '../frontend/home.html';
    //         return $response->getBody()->write(file_get_contents($file));

    //     }
    //     return $response->withHeader('Location', '/index.html')->withStatus(301);
    // }

    // static function homepage(Request $request, Response $response) {
    //     $file = '../frontend/homepage';
    //     return $response->getBody()->write(file_get_contents($file));
    // }

    static function create() {
        echo '<h1>Shorter create</h1>';
    }

    static function read() {
        echo '<h1>Shorter read</h1>';
    }

    static function update() {
        echo '<h1>Shorter update</h1>';
    }

    static function delete() {
        echo '<h1>Shorter delete</h1>';
    }

    static function redirectShort(Request $request, Response $response, array $args) {
        $shorturl = $args['shorturl'];
        echo '<h1>'.$shorturl.'</h1>';
    }
}
