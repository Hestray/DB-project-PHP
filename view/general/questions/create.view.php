<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $heading ?></title>
        <link rel="stylesheet" href="/assets/content.css">
        <link rel="stylesheet" href="/assets/layout.css">
        <link rel="stylesheet" href="/assets/validation_errors.css">
    </head>
    <body>
        <?php view("/partials/nav.php"); ?>
        <main>
            <h1><?= $heading ?></h1>
            <form action="/questions" method="POST">
                <label for="title">Title</label>
                <div>
                    <textarea id="title" name="title"><?= $_POST['title'] ?? '' ?></textarea>
                </div>

                <?php
                if (isset($errors['title'])) : ?>
                    <p class="validation_error"><?= $errors['title']; ?></p>
                <?php endif; ?>

                <label for="body">Your question</label>
                <div>
                    <textarea id="body" name="body"><?= $_POST['body'] ?? '' ?></textarea>
                </div>

                <?php
                if (isset($errors['body'])) : ?>
                    <p class="validation_error"><?= $errors['body']; ?></p>
                <?php endif; ?>
        
                <div>
                    <button type="submit">Post question</button>
                </div>
            </form>
        </main>
        <?php view("/partials/footer.html"); ?>