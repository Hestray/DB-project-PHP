<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// redirect
view("/general/questions/index.view.php",
    [
        'heading' => "Questions",
        'questions' => $db->select("Select * from questions")
    ]);