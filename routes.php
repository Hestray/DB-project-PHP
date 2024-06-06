<?php

    // authentication pages
    $router->get("/login",              "authentication/controller/login.php")->only('guest');
    $router->post("/sessions",          "authentication/controller/process/login.process.php")->only('guest'); 
    $router->get("/signup",             "authentication/controller/sign_up.php")->only('guest');
    $router->post("/signup",            "authentication/controller/process/sign_up.process.php")->only('guest');
    $router->get("/recovery",           "authentication/controller/forgot_password.php")->only('guest');
    $router->delete("/logout",          "authentication/controller/logout.php")->only('auth');
    
    // general main pages
    $router->get("/",                   "controller/index.php")->only('auth');
    $router->get("/dashboard",          "controller/general/dashboard.php")->only('auth');
    
    # notes
    $router->get("/notes",              "controller/general/notes/index.php")->only('auth');
    $router->get("/note",               "controller/general/notes/show.php")->only('auth');    // to select
    $router->patch("/note",             "controller/general/notes/update.php")->only('auth');  // to update
    $router->delete("/note",            "controller/general/notes/destroy.php")->only('auth'); // to delete
    $router->get("/notes/create",       "controller/general/notes/create.php")->only('auth');
    $router->get("/notes/edit",         "controller/general/notes/edit.php")->only('auth');
    $router->post("/notes",             "controller/general/notes/store.php")->only('auth');   // to insert
    
    # questions
    $router->get("/questions",              "controller/general/questions/index.php")->only('auth');
    $router->get("/question",               "controller/general/questions/show.php")->only('auth');    // to select
    $router->patch("/question",             "controller/general/questions/update.php")->only('auth');  // to update
    $router->delete("/question",            "controller/general/questions/destroy.php")->only('auth'); // to delete
    $router->get("/questions/create",       "controller/general/questions/create.php")->only('auth');
    $router->get("/questions/edit",         "controller/general/questions/edit.php")->only('auth');
    $router->post("/questions",             "controller/general/questions/store.php")->only('auth');   // to insert

    $router->get("/contactus",              "controller/general/contact_us.php");
    
    // profile pages
    $router->get("/profile",                "controller/profile/index.php")->only('auth');
    $router->get("/profile/edit",           "controller/profile/edit.php")->only('auth');
    $router->patch("/profile",              "controller/profile/update.php")->only('auth');  // to update
    $router->delete("/profile/delete",         "controller/profile/destroy.php")->only('auth');

    // privacy policy
    $router->get("/privacypolicy",          "controller/general/privacy.php");