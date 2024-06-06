<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $heading ?></title>
        <link rel="stylesheet" href="assets/content.css">
        <link rel="stylesheet" href="assets/layout.css">
    </head>
    <body>
        <?php view("partials/nav.php"); ?>
        <main>
            <h1><?= $heading ?></h1>
            <div class="description">
                <p>You can find me via my email, <i>astrumihestray@gmail.com</i>, or on my <a style="text-decoration: none; color: #3E9389;" href="https://github.com/Hestray">github</a>!</p>
                <p>Feel free to contact me about any issues on this website or if you would like to suggest features.</p>
            </div>
        </main>
    <?php view("/partials/footer.html"); ?>