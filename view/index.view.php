<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home page</title>   
        <link rel="stylesheet" href="assets/content.css">
        <link rel="stylesheet" href="assets/layout.css">
    </head>
    <body>
        <?php view("/partials/nav.php"); ?>
        <main>
            <h1>Welcome, <?= $_SESSION['user']['username'] ?>!</h1>
        </main>
    <?php view("/partials/footer.html"); ?>