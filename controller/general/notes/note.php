<?php
require base_path("init.php");
$NID = $_GET['NID'];

view("/general/notes/note.view.php",
        [
            'heading' => "Note",
            'note' => $db->select("Select * from notes where NID = ?", [$NID])
        ]);