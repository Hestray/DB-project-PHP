<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $heading ?></title>
        <link rel="stylesheet" href="/assets/validation_errors.css">
    </head>
    <html>
        <div class="container">
            <div class="title container">
                <h1><?= $heading ?></h1>
            </div>
            <div class="authentication container">
                <form id="login_form" action="/sessions" method="POST">
                    <div class="label">
                        <label for="user-email">
                            Email: 
                        </label>
                    </div>
                    <div class="input">
                        <input type="email" id="user-email" name="email" required>
                        <?php
                            if (isset($errors['email'])) : ?>
                                <p class="validation_error"><?= $errors['email']; ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="label">
                        <label for="user-username">
                            Username: 
                        </label>
                    </div>
                    <div class="input">
                        <input type="text" id="user-username" name="username" required>
                        <?php
                            if (isset($errors['user'])) : ?>
                                <p class="validation_error"><?= $errors['user']; ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="label">
                        <label for="user-password">
                            Password: 
                        </label>
                    </div>
                    <div class="input">
                        <input type="password" id="user-password" name="password" required>
                        <?php
                            if (isset($errors['password'])) : ?>
                                <p class="validation_error"><?= $errors['password']; ?></p>
                        <?php endif; ?>
                    </div>

                    <input type="submit" value="Login">
                    <a href="/recovery">Forgot your password</a>
                    <a href="/signup">Create an account</a>
                </form>
            </div>
        </div>
        <?php require base_path("authentication/partials/footer.html"); ?>