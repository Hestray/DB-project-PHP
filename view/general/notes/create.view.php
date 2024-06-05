<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $heading ?></title>
        <link rel="stylesheet" href="/assets/validation_errors.css">
    </head>
    <body>
        <?php view("/partials/nav.php"); ?>
        <h1><?= $heading ?></h1>
        <form action="/notes" method="POST">
            <label for="title">Title</label>
            <div>
                <textarea id="title" name="title"><?= $_POST['title'] ?? '' ?></textarea>
            </div>

            <?php
            if (isset($errors['title'])) : ?>
                 <p class="validation_error"><?= $errors['title']; ?></p>
            <?php endif; ?>

            <label for="body">Your note</label>
            <div>
                <textarea id="body" name="body"><?= $_POST['body'] ?? '' ?></textarea>
            </div>

            <?php
            if (isset($errors['body'])) : ?>
                <p class="validation_error"><?= $errors['body']; ?></p>
            <?php endif; ?>
    
            <div>
                <button type="submit">Post note</button>
            </div>
        </form>
    </body>
</html>