<?php
    if (!loggedIn()) {
        // means it is empty, so no user is logged in
        require(__DIR__ . "/../Authentication/Controllers/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home page</title>   
        <link rel="stylesheet" href="CSS/nav.css">
    </head>
    <body>
        <?php require(__DIR__ . "/../Views/Partials/nav.php"); ?>
    </body>
</html>