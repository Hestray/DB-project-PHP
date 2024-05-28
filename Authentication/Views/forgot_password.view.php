<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Recover your password</title>
    </head>
    <html>
        <div class="container">
            <div class="title container">
                <h1><?= "{$heading}" ?></h1>
            </div>
            <div class="authentication container">
                <form id="forgot_password_form" action="" method="POST">
                    <?php
                        require(__DIR__ . "/../Partials/body/forgot_password.html");
                    ?>
                </form>
            </div>
        </div>
        <?php require(__DIR__ . "/../Partials/footer.html"); ?>
