<?php
    // connect to database
    $config = require("config.php");
    require("Database.php");
    $db = new Database($config['database']);