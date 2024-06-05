<?php
// this file deals with the update query
use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

// retrieve the corresponding note
$note = $db->select("Select * from notes where NID = ?", [$_POST['NID']]);

// authorize
authorize($_SESSION['user']['id'] === $note[0]['note_UID']);

// validate
if (Validator::bodyCheck($_POST['title'], 0, 255) == 1)
    $errors['title'] = "Title length exceeds maximum of 255 characters.";
elseif (Validator::bodyCheck($_POST['title'], 0, 255) == -1)
    $errors['title'] = "Title cannot be empty!";

if (Validator::bodyCheck($_POST['body'], 0, 30000) == 1)
    $errors['body'] = "Title length exceeds maximum of 30000 characters.";
elseif (Validator::bodyCheck($_POST['body'], 0, 30000) == -1)
    $errors['body'] = "Title cannot be empty!";
    
// handle validation issues
if (!empty($errors)) {
    return view("/general/notes/edit.view.php",
        [
            'heading' => "Edit note",
            'note' => $note,
            'errors' => $errors
        ]);
}

// insert into database if no errors
$db->modify('UPDATE notes
    SET body = ?, title = ?
    WHERE NID = ?', 
    [
        $body   = $_POST['body'],
        $title  = $_POST['title'],
        $NID    = $_POST['NID']
    ]);

header("location: /note?NID={$NID}");
die();
