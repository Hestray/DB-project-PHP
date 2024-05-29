<?php
require __DIR__ . "/../../Validator.php";

// create-note file
$heading = "Create note";

// handle the form submission
require(__DIR__ . "/../../init.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    
    if (!Validator::bodyCheck($_POST['body'], 0, 3000))
        $errors['body'] = "The body length must be between 0 and 3000 characters.";

    if (empty($errors)) {
        $db->query('INSERT INTO notes (body, note_UID) 
                VALUES(?, ?)', 
                [
                    $body = $_POST['body'],
                    $user_UID = $_SESSION['UID']
                ]);
    }
}

require(__DIR__ . "/../../views/general/notes/create.view.php");