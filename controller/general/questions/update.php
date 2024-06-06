<?php
// this file deals with the update query
use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

// retrieve the corresponding post
$question = $db->select("Select * from questions where QID = ?", [$_POST['QID']]);

// authorize
authorize($_SESSION['user']['id'] === $question[0]['question_UID']);

// validate
if (Validator::bodyCheck($_POST['title'], 0, 255) == 1)
    $errors['title'] = "Title length exceeds maximum of 255 characters.";
elseif (Validator::bodyCheck($_POST['title'], 0, 255) == -1)
    $errors['title'] = "Title cannot be empty!";

if (Validator::bodyCheck($_POST['body'], 0, 3500) == 1)
    $errors['body'] = "Title length exceeds maximum of 30000 characters.";
elseif (Validator::bodyCheck($_POST['body'], 0, 3500) == -1)
    $errors['body'] = "Title cannot be empty!";
    
// handle validation issues
if (!empty($errors)) {
    return view("/general/question/edit.view.php",
        [
            'heading' => "Edit post",
            'question' => $question,
            'errors' => $errors
        ]);
}

// insert into database if no errors
$db->modify('UPDATE questions
    SET body = ?, title = ?
    WHERE QID = ?', 
    [
        $body   = $_POST['body'],
        $title  = $_POST['title'],
        $QID    = $_POST['QID']
    ]);

header("location: /question?QID={$QID}");
die();
