<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

view("/general/questions/question.view.php",
    [
        'heading' => "Question"
    ]);