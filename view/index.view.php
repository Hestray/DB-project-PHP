<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home page</title>   
        <link rel="stylesheet" href="assets/nav.css">
    </head>
    <body>
        <?php view("/partials/nav.php"); ?>
        <h1>Welcome, <?= $_SESSION['user']['username'] ?>!</h1>
    </body>
</html>