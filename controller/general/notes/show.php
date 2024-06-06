<?php
// FILE HANDLES: individual note page
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// show all notes
$NID  = $_GET['NID'];
$note = $db->select("Select * from notes where NID = ?", [$NID]);

view("/general/notes/note.view.php",
    [
        'heading' => "Note",
        'note' => $note,
        'author' => $db->select("Select * from users where UID = ?", [$note[0]['note_UID']]),
        'NID' => $NID
    ]);