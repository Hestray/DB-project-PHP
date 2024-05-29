<!DOCTYPE>
<html>
    <head>
        <title><?= $heading ?></title>
    </head>
    <body>
        <div class="container">
            <div class="title container">
                <h1><?= $heading ?></h1>
            </div>
            <div class="authentication container">
                <form id="sign_up_form" action=<?= __DIR__ . "/../Controllers/Process/sign_up.process.php" ?> method="post">
                    <?php
                        require(__DIR__ . "/../Partials/body/sign_up.php");
                    ?>
                    </form>
                </div>
            </div>
        <?php require(__DIR__ . "/../Partials/footer.html"); ?>