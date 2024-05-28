<?php
return [
    // general main page
    '/'             => "Controllers/home.php",
    '/mylibrary'    => "Controllers/General/my_library.php", // same as profile's My Library
    '/notes'        => "Controllers/General/notes.php",
    '/questions'    => "Controllers/General/questions.php",
    '/contactus'    => "Controllers/General/contact_us.php",
    // profile pages
    '/profile'      => "Controllers/Profile/profile.php",
    '/mynotes'      => "Controllers/Profile/my_notes.php",
    '/myquestions'  => "Controllers/Profile/my_questions.php",
    // authentication pages
    '/login'        => "Authentication/Controllers/login.php",
    '/signup'       => "Authentication/Controllers/sign_up.php",
    '/recovery'     => "Authentication/Controllers/forgot_password.php"
];
