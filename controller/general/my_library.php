<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

view("/general/my_library.view.php",
    [
        'heading' => "My Library"
    ]);