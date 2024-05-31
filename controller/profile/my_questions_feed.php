<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

view("/profile/my_questions_feed.view.php",
    [
        'heading' => "My Questions"  
    ]);
