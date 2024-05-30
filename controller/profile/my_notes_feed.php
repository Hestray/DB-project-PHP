<?php
require base_path("init.php");

view("/profile/my_notes_feed.view.php",
        [
            'heading' => 'My Notes',
            'tasks' => $db->select("Select * from notes where note_UID = ?", [$_SESSION['id']]),
            // 'id' => $_GET['id'] // this should be read from whatever the user tries to give in the url
            'id' => $_SESSION['id']
        ]);