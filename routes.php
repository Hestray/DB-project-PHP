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
    $router->get("/mylibrary",          "controller/general/my_library.php")->only('auth');
    
    # notes
    $router->get("/notes",              "controller/general/notes/index.php")->only('auth');
    $router->get("/note",               "controller/general/notes/show.php")->only('auth');    // to select
    $router->patch("/note",             "controller/general/notes/update.php")->only('auth');  // to update
    $router->delete("/note",            "controller/general/notes/destroy.php")->only('auth'); // to delete
    $router->get("/notes/create",       "controller/general/notes/create.php")->only('auth');
    $router->get("/notes/edit",         "controller/general/notes/edit.php")->only('auth');
    $router->post("/notes",             "controller/general/notes/store.php")->only('auth');   // to insert
    
    # questions
    $router->get("/questions",          "controller/general/questions/index.php")->only('auth');
    $router->get("/question",           "controller/general/questions/question.php")->only('auth');
    $router->get("/questions/create",   "controller/general/questions/create.php")->only('auth');

    $router->get("/contactus",          "controller/general/contact_us.php");
    
    // profile pages
    $router->get("/profile",            "controller/profile/profile.php")->only('auth');
    $router->get("/profile/edit",       "controller/profile/profile_edit.php")->only('auth');
    $router->get("/mynotes",            "controller/profile/my_notes_feed.php")->only('auth');
    $router->get("/myquestions",        "controller/profile/my_questions_feed.php")->only('auth');

    // privacy policy
    $router->get("/privacypolicy",      "controller/general/privacy.php");