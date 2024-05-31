<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

view("/profile/profile_edit.view.php",
    [
        'heading' => "Edit your profile"
    ]);