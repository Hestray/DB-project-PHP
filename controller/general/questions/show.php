<?php
// FILE HANDLES: individual question post page
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// show all questions
$QID = $_GET['QID'];
$question = $db->select("Select * from questions where QID = ?", [$QID]);

view("/general/questions/question.view.php",
    [
        'heading' => "Questions",
        'question' => $question,
        'author' => $db->select("Select * from users where UID = ?", [$question[0]['question_UID']]),
        'QID' => $QID
    ]);