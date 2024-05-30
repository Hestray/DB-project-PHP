<?php
use Core\Validator;
$errors = [];

// handle the form submission
require base_path("init.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (Validator::bodyCheck($_POST['title'], 0, 255) == 1)
        $errors['title'] = "Title length exceeds maximum of 255 characters.";
    elseif (Validator::bodyCheck($_POST['title'], 0, 255) == -1)
        $errors['title'] = "Title cannot be empty!";

    if (Validator::bodyCheck($_POST['body'], 0, 30000) == 1)
        $errors['body'] = "Title length exceeds maximum of 30000 characters.";
    elseif (Validator::bodyCheck($_POST['body'], 0, 30000) == -1)
        $errors['body'] = "Title cannot be empty!";
    
    if (empty($errors)) {
        $db->query('INSERT INTO notes (body, title, note_UID) 
                VALUES(?, ?, ?)', 
                [
                    $body = $_POST['body'],
                    $title = $_POST['title'],
                    $user_UID = $_SESSION['id']
                ]);
    }
}

view("/general/notes/create.view.php",
[
    'heading' => "Create note",
    'errors' => $errors
]);