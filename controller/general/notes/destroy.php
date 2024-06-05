<?php
// FILE HANDLES: delete of a note

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// handle deletion
$NID = $_POST['NID'];
$note = $db->select("Select * from notes where NID = ?", [$NID]);
authorize($_SESSION['user']['id'] === $note[0]['note_UID']);
$db->modify("Delete from notes where NID = ?", [$NID]);

header("location: /notes");
die();