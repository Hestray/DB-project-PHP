<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $heading ?></title>
    </head>
    <html>
        <div class="container">
            <div class="title container">
                <h1><?= "{$heading}" ?></h1>
            </div>
            <div class="authentication container">
                <form id="login_form" action="" method="POST">
                    <?php
                        require(__DIR__ . "/../Partials/body/login.html");
                    ?>
                </form>
            </div>
        </div>
        <?php require(__DIR__ . "/../Partials/footer.html"); ?>