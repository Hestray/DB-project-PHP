<?php
// FILE HANDLES: delete of a question post

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// handle deletion
$QID = $_POST['QID'];
$question = $db->select("Select * from questions where QID = ?", [$QID]);
authorize($_SESSION['user']['id'] === $question[0]['question_UID']);
$db->modify("Delete from questions where QID = ?", [$QID]);

header("location: /questions");
die();