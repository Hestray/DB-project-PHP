<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

view("/profile/profile.view.php",
    [
        'heading' => "My Profile"
    ]);