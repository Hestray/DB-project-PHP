<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home page</title>   
        <link rel="stylesheet" href="CSS/nav.css">
    </head>
    <body>
        <?php view("/partials/nav.php"); ?>
        <h1>Welcome, <?= $_SESSION['username'] ?>!</h1>
    </body>
</html>