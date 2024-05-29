<?php
$heading = "Notes";

// handle the form submission
require(__DIR__ . "/../../init.php");

echo "1. " . $errors['body'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    echo "<br>2. " . $errors['body'];
    if (strlen($_POST['body']) === 0) {
        $errors['body'] = "A body is required";
        echo "<br>3. " . $errors['body'];
    }
    echo "hey :(";

    if (empty($errors)) {
        $db->query("INSERT INTO notes (body, note_UID) 
                VALUES(?, ?)", 
                [
                    $body = $_POST['body'],
                    $user_UID = $_SESSION['UID']
                ]);
    }
}
var_dump($_SERVER['REQUEST_METHOD'] === 'POST');

// redirect
require(__DIR__ . "/../../Views/General/notes_feed.view.php");