<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// redirect
view("/general/notes/index.view.php",
    [
        'heading' => "Notes",
        'notes' => $db->select("Select * from notes")
    ]);