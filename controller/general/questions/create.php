<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

view("/general/questions/create.view.php",
    [
        'heading' => "Create question"
    ]);