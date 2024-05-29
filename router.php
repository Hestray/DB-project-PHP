<?php
# this file will be responsible for handling the current router
$uri = parse_url($_SERVER["REQUEST_URI"])['path'];
$routes = require("routes.php");
// function routeToController($uri, array $routes) {
//     if (!loggedIn()) {
//         if (array_key_exists($uri, $routes['authentication'])) {
//             if (file_exists($routes['authentication'][$uri]))
//                 require($routes['authentication'][$uri]);            
//             else
//                 abort(NOT_FOUND);
//         }
//     } 
//     else {
//         if (array_key_exists($uri, $routes['active'])) {
//             if (file_exists($routes['active'][$uri]))
//                 require($routes['active'][$uri]);            
//             else
//                 abort(404);
//         }
//         /*
//             # the above function does the same thing as this
//             if     ($uri === '/login')    require("Authentication/Controllers/login.php");
//             elseif ($uri === '/signup')   require("Authentication/Controllers/sign_up.php");
//             elseif ($uri === '/recovery') require("Authentication/Controllers/forgot_password.php");
//             // ...
//         */
//         else {
//             abort(404); // throw 404 HTTP error
//         } 
//     }
// }
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
    require(__DIR__ . "/Views/Partials/{$code}.php");
    die(); // kills the page
}

routeToController($uri, $routes);