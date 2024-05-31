<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

view("/general/questions/index.view.php",
    [
        'heading' => "Questions"
    ]);