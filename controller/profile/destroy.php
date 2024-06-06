<?php
// FILE HANDLES: deletion of user

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

// handle deletion
$UID = $_SESSION['user']['id'];
$user = $db->select("Select * from users where UID = ?", [$UID]);
authorize($_SESSION['user']['id'] === $user[0]['UID']);
$db->modify("Delete from users where UID = ?", [$UID]);

// logout too
view("../authentication/controller/logout.php");