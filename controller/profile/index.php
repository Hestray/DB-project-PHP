<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$user = $db->select('SELECT * FROM users WHERE UID = ?', [$_SESSION['user']['id']]);

view("/profile/index.view.php",
    [
        'heading' => "My Profile",
        'user' => $user
    ]);