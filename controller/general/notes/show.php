<?php
// FILE HANDLES: individual note page
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// show all notes
$NID = $_GET['NID'];

view("/general/notes/note.view.php",
    [
        'heading' => "Note",
        'note' => $db->select("Select * from notes where NID = ?", [$NID]),
        'NID' => $NID
    ]);