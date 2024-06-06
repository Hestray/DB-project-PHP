<?php
// FILE HANDLES: validation of form (from create)
use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

// handle errors
if (Validator::bodyCheck($_POST['title'], 0, 255) == 1)
    $errors['title'] = "Title length exceeds maximum of 255 characters.";
elseif (Validator::bodyCheck($_POST['title'], 0, 255) == -1)
    $errors['title'] = "Title cannot be empty!";

if (Validator::bodyCheck($_POST['body'], 0, 3500) == 1)
    $errors['body'] = "Title length exceeds maximum of 3500 characters.";
elseif (Validator::bodyCheck($_POST['body'], 0, 3500) == -1)
    $errors['body'] = "Title cannot be empty!";
    
// handle validation issues
if (!empty($errors)) {
    return view("/general/questions/create.view.php",
        [
            'heading' => "Ask question",
            'errors' => $errors
        ]);
}

// insert into database if no errors
if (empty($errors)) {
    $db->query('INSERT INTO questions (body, title, question_UID) 
        VALUES(?, ?, ?)', 
        [
            $body = $_POST['body'],
            $title = $_POST['title'],
            $question_UID = $_SESSION['user']['id']
        ]);
    $QID = $db->lastInsertID();

    header("location: /question?QID={$QID}");
    die();
}
