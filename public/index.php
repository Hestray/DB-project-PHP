<?php
    const BASE_PATH = __DIR__ . "/../";
    require BASE_PATH . "Core/functions.php";
    spl_autoload_register(function ($class) {
        $class = str_replace("\\", "/", $class);
        require base_path("{$class}.php");
    });
    showErrors(TRUE);       // turn errors on for everything

    session_start();  
    // delete soon
    $_SESSION['username'] = "PEPEPOPO";
    $_SESSION['id'] = 2;
    // here ends delete

    require base_path("Core/router.php");