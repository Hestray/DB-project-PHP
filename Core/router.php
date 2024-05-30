<?php
# this file will be responsible for handling the current router
$uri    = parse_url($_SERVER["REQUEST_URI"])['path'];
$routes = require base_path("routes.php");

function routeToController($uri, array $routes) {
    if (array_key_exists($uri, $routes)) {
        if (file_exists(base_path($routes[$uri])))
            require base_path($routes[$uri]);
        else
            abort(404);
    }
    /*
        # the above function does the same thing as this
        if     ($uri === '/login')    require("authentication/controllers/login.php");
        elseif ($uri === '/signup')   require("authentication/controllers/sign_up.php");
        elseif ($uri === '/recovery') require("authentication/controllers/forgot_password.php");
        // ...
    */
    else {
        abort(404); // throw 404 HTTP error
    }
}

function abort($code) {
    http_response_code($code);
    // normally we would have to check if the {$code}.html file exists
    require base_path("/view/partials/{$code}.php");
    die(); // kills the page
}

routeToController($uri, $routes);