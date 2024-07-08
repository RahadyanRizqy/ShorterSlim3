<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class UserController {
    static function create() {
        echo '<h1>User create</h1>';
    }

    static function read(Request $request, Response $response) {
        $data = (array)$request->getParsedBody();

        # Login Method Test
        if ($data['email'] === 'forwetpie678@hamham.uk' && $data['password'] === 'forwetpie678') {

            // $file = '../frontend/home.php';
            // return $response->getBody()->write(file_get_contents($file));
            include '../frontend/home.php';

            $_SESSION['email'] = $data['email']; // Store user ID in session variable
            // setcookie('session_id_cookie', session_id(), time() + 3600, '/');
            // if (isset($_COOKIE['session_id_cookie'])) {
            //     $session_id = $_COOKIE['session_id_cookie'];
            //     session_id($session_id);
            // }
        }
    }


    static function update() {
        echo '<h1>User update</h1>';
    }

    static function delete(Request $request) {
        // get back to home route
        session_destroy();
    }
}