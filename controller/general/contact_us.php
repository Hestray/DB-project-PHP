<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

view("/general/contact_us.view.php", 
    [
        'heading' => "Contact Us"
    ]);