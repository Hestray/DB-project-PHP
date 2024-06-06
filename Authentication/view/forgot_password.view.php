<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $heading ?></title>
        <link rel="stylesheet" href="/assets/auth.css">
    </head>
    <html>
        <div class="container">
            <div class="title container">
                <h1><?= $heading ?></h1>
            </div>
            <div class="authentication container">
                <form id="forgot_password_form" action="/recovery" method="POST">
                <div class="label">
                    <label for="user-email">
                        Email: 
                    </label>
                </div>
                <div class="input">
                    <input type="email" id="user-email" name="email" required>
                </div>

                <div class="label">
                    <label for="user-username">
                        Username: 
                    </label>
                </div>
                <div class="input">
                    <input type="text" id="user-username" name="username" required>
                </div>

                <input type="submit" value="Recover your password" onclick="alert("This would send an email");">
                <!-- TODO: add a script for onclick, so that it only displays an alert saying that yeah, it would send an email -->
                </form>
            </div>
        </div>
        <?php require base_path("authentication/partials/footer.html"); ?>
