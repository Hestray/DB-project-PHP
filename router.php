<?php
# this file will be responsible for handling the current router
$uri = parse_url($_SERVER["REQUEST_URI"])['path'];
$routes = [
    // general main page
    '/'             => "Controllers/home.php",
    '/mylibrary'    => "Controllers/my_library.php", // same as profile's My Library
    '/notes'        => "Controllers/notes.php",
    '/questions'    => "Controllers/questions.php",
    '/contactus'    => "Controllers/contact_us.php",
    // profile pages
    '/profile'      => "Controllers/profile.php",
    '/mynotes'      => "Controllers/my_notes.php",
    '/myquestions'  => "Controllers/my_questions.php",
    // authentication pages
    '/login'        => "Authentication/Controllers/login.php",
    '/signup'       => "Authentication/Controllers/sign_up.php",
    '/recovery'     => "Authentication/Controllers/forgot_password.php"
];

function routeToController($uri, array $routes) {
    if (array_key_exists($uri, $routes)) {
        if (file_exists($routes[$uri]))
            require($routes[$uri]);            
        else
            abort(404);
    }
    /*
        # the above function does the same thing as this
        if     ($uri === '/login')    require("Authentication/Controllers/login.php");
        elseif ($uri === '/signup')   require("Authentication/Controllers/sign_up.php");
        elseif ($uri === '/recovery') require("Authentication/Controllers/forgot_password.php");
        // ...
    */
    else {
        abort(404); // throw 404 HTTP error
    }
}

function abort($code) {
    http_response_code($code);
    // normally we would have to check if the {$code}.html file exists
    require "views/{$code}.html";
    die(); // kills the page
}

routeToController($uri, $routes);