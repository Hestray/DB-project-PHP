<?php
return [
    // authentication pages
    '/login'        => "authentication/controller/login.php",
    '/signup'       => "authentication/controller/sign_up.php",
    '/recovery'     => "authentication/Controller/forgot_password.php",
    // general main page
    '/'             => "controller/index.php",
    '/mylibrary'    => "controller/general/my_library.php",            // same as profile's My Library
    '/notes'        => "controller/general/notes/index.php",           // notes feed = index
    '/note'         => "controller/general/notes/note.php",            // note page (individual, full page)
    '/notes/create' => "controller/general/notes/create.php",          
    '/questions'    => "controller/general/questions/index.php",
    '/question'     => "controller/general/questions/question.php",
    '/questions/create' => "controller/general/questions/create.php",
    '/contactus'    => "controller/general/contact_us.php",
    // profile pages
    '/profile'      => "controller/profile/profile.php",
    '/editprofile'  => "controller/profile/profile_edit.php",
    '/mynotes'      => "controller/profile/my_notes_feed.php",
    '/myquestions'  => "controller/profile/my_questions_feed.php"
];
