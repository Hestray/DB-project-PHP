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
                <form id="sign_up_form" action="" method="post">
                    <?php
                        require(__DIR__ . "/../Partials/body/sign_up.html");
                    ?>
                    </form>
                </div>
            </div>
        <?php require(__DIR__ . "/../Partials/footer.html"); ?>