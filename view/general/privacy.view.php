<!DOCTYPE html> 
<html lang="en">
    <head>
        <title><?= $heading ?></title>
        <link rel="stylesheet" href="assets/content.css">
        <link rel="stylesheet" href="assets/layout.css">
    </head>
    <body>
        <main>
            <?php view("partials/privacy.html"); ?>
        </main>
        <?php if(empty($_SESSION['user']))
        view("../authentication/partials/footer.html");
        else view("/partials/footer.html"); ?>
    </body>
</html>