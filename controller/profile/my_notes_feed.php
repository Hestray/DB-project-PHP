<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

view("/profile/my_notes_feed.view.php",
    [
        'heading' => 'My Notes',
        'notes' => $db->select("Select * from notes where note_UID = ?", [$_SESSION['id']]),
        'id' => $_SESSION['id']
    ]);