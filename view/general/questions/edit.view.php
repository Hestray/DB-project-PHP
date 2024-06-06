<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $heading ?></title>
        <link rel="stylesheet" href="assets/content.css">
        <link rel="stylesheet" href="assets/layout.css">
        <link rel="stylesheet" href="/assets/validation_errors.css">
    </head>
    <body>
        <?php view("/partials/nav.php"); ?>
        <main>
            <h1><?= $heading ?></h1>
            <form method="POST" action="/question">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="QID" value="<?= $question[0]['QID'] ?>">
                <label for="title">Title</label>
                <div>
                    <textarea id="title" name="title"><?= $question[0]['title'] ?? '' ?></textarea>
                </div>

                <?php
                if (isset($errors['title'])) : ?>
                    <p class="validation_error"><?= $errors['title']; ?></p>
                <?php endif; ?>

                <label for="body">Your question</label>
                <div>
                    <textarea id="body" name="body"><?= $question[0]['body'] ?? '' ?></textarea>
                </div>

                <?php
                if (isset($errors['body'])) : ?>
                    <p class="validation_error"><?= $errors['body']; ?></p>
                <?php endif; ?>

                <div>
                    <button type="submit">Update</button>
                </div>

                <div>
                    <a href="/question?QID= <?= $question[0]['QID'] ?>">Cancel</a>
                </div>
            </form>
            <!-- delete button -->
            <form class="delete-content" method="POST" action="/question">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="QID" value="<?= $question[0]['QID'] ?>">
                <button class="delete-button" style="cursor: pointer; color: white; border: none; background-color: red; text-weight: bold;">Delete post</button>
            </form>
        </main> 
        <?php view("/partials/footer.html"); ?>