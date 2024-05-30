<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $heading ?></title>
    </head>
    <html>
        <div class="container">
            <div class="title container">
                <h1><?= $heading ?></h1>
            </div>
            <div class="authentication container">
                <form id="forgot_password_form" action="/recovery" method="POST">
                    <?php
                        require __DIR__ . "/../partials/body/forgot_password.php";
                    ?>
                </form>
            </div>
        </div>
        <?php require __DIR__ . "/../partials/footer.html"; ?>
