<?php
// responsible for displaying the editing form
use Core\App;
use Core\Database;
use Core\Response;
$db = App::resolve(Database::class);

$question = $db->select("Select * from questions where QID = ?", [$_GET['QID']]);
if ($question === false) abort(Response::NOT_FOUND);

authorize($_SESSION['user']['id'] === $question[0]['question_UID']);

view("/general/questions/edit.view.php",
[
    'heading' => "Edit post",
    'question' => $question,
    'QID' => $_GET['QID'],
    'errors' => []
]);