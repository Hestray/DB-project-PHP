<?php
return [
    // authentication pages
    // 'authentication' => [
        '/login'        => "Authentication/Controllers/login.php",
        '/signup'       => "Authentication/Controllers/sign_up.php",
        '/recovery'     => "Authentication/Controllers/forgot_password.php",
    // ],
    // 'active' => [
        // general main page
        '/'             => "Controllers/home.php",
        '/mylibrary'    => "Controllers/General/my_library.php", // same as profile's My Library
        '/notes'        => "Controllers/General/notes_feed.php",
        '/note'         => "Controllers/General/note_page.php",
        '/notes/create' => "Controllers/General/note_create.php",
        '/questions'    => "Controllers/General/questions_feed.php",
        '/question'     => "Controllers/General/question_page.php",
        '/questions/create' => "Controllers/General/question_create.php",
        '/contactus'    => "Controllers/General/contact_us.php",
        // profile pages
        '/profile'      => "Controllers/Profile/profile.php",
        '/editprofile'  => "Controllers/Profile/profile_edit.php",
        '/mynotes'      => "Controllers/Profile/my_notes_feed.php",
        '/myquestions'  => "Controllers/Profile/my_questions_feed.php"
    // ]
];
