<?php
require base_path("init.php");
view("/general/notes/index.view.php",
        [
            'heading' => "Notes",
            'notes' => $db->select("Select * from notes")
        ]);