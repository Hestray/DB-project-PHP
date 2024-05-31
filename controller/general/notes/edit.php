<?php
// responsible for displaying the editing form
use Core\App;
use Core\Database;
use Core\Response;
$db = App::resolve(Database::class);

$note = $db->select("Select * from notes where NID = ?", [$_GET['NID']]);
if ($note === false) abort(Response::NOT_FOUND);

authorize($_SESSION['id'] === $note[0]['note_UID']);

view("/general/notes/edit.view.php",
[
    'heading' => "Edit note",
    'note' => $note,
    'nid' => $_GET['NID'],
    'errors' => []
]);