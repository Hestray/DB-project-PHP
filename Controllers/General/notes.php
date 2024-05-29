<?php
$heading = "Notes";

require(__DIR__ . "/../../init.php");
$task_result = $db->query("Select * from notes where note_UID = ?", [2])['result'];

require(__DIR__ . "/../../Views/General/notes.view.php");