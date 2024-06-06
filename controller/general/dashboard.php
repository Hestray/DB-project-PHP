<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);    
$notes = $db->select("SELECT * FROM notes WHERE note_UID = ?", [$_SESSION['user']['id']]);
$questions = $db->select("SELECT * FROM questions WHERE question_UID = ?", [$_SESSION['user']['id']]);
view("/general/dashboard.view.php",
    [
        'heading' => "Dashboard",
        'notes' => $notes,
        'questions' => $questions
    ]);