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
                <form id="sign_up_form" action="/signup" method="post">
                    <?php
                        require base_path("authentication/view/partials/body/sign_up.php");
                    ?>
                    </form>
                </div>
            </div>
        <?php require base_path("authentication/view/partials/footer.html"); ?>