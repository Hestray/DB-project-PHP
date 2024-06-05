<?php
    const BASE_PATH = __DIR__ . "/../";
    require BASE_PATH . "Core/functions.php";

    // autoload
    spl_autoload_register(function ($class) {
        $class = str_replace("\\", "/", $class);
        require base_path($class . ".php");
    });
    
    // errors display in browser: ON if set to TRUE
    showErrors(TRUE);

    // load service containers
    require BASE_PATH . "services.php";
    
    // sessions
    session_start();  

    // routing
    $router = new \Core\Router();
    $uri    = parse_url($_SERVER["REQUEST_URI"])['path'];
    $routes = require base_path("routes.php");
    $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
    $router->route($uri, $method);