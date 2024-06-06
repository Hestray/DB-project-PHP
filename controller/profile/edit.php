<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

view("/profile/edit.view.php",
    [
        'heading' => "Edit your profile"
    ]);