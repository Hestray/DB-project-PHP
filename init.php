<?php
    // connect to database
    use Core\Database;
    $config = require base_path("config.php");
    // require base_path("Core/Database.php");
    $db = new Database($config['database']);