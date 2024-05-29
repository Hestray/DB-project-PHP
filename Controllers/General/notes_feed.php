<?php
$heading = "Notes";

// handle the form submission
require(__DIR__ . "/../../init.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query("INSERT INTO notes (body, note_UID) 
                VALUES(?, ?)", 
                [
                    $body = $_POST['body'],
                    $user_UID = $_SESSION['UID']
                ]);
}

// redirect
require(__DIR__ . "/../../Views/General/notes_feed.view.php");