<?php

    // authentication pages
    $router->get("/login",              "authentication/controller/login.php");
    $router->get("/signup",             "authentication/controller/sign_up.php");
    $router->get("/recovery",           "authentication/controller/forgot_password.php");
    // general main pages
    $router->get("/",                   "controller/index.php");
    $router->get("/mylibrary",          "controller/general/my_library.php");
    
    $router->get("/notes",              "controller/general/notes/index.php");
    $router->get("/note",               "controller/general/notes/show.php");    // to select
    $router->patch("/note",             "controller/general/notes/update.php");  // to update
    $router->delete("/note",            "controller/general/notes/destroy.php"); // to delete
    $router->get("/notes/create",       "controller/general/notes/create.php");
    $router->get("/notes/edit",         "controller/general/notes/edit.php");
    $router->post("/notes",             "controller/general/notes/store.php");   // to insert

    $router->get("/questions",          "controller/general/questions/index.php");
    $router->get("/question",           "controller/general/questions/question.php");
    $router->get("/questions/create",   "controller/general/questions/create.php");

    $router->get("/contactus",          "controller/general/contact_us.php");
    // profile pages
    $router->get("/profile",            "controller/profile/profile.php");
    $router->get("/profile/edit",       "controller/profile/profile_edit.php");
    $router->get("/mynotes",            "controller/profile/my_notes_feed.php");
    $router->get("/myquestions",        "controller/profile/my_questions_feed.php");