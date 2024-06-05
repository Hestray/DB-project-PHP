<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $heading ?></title>
        <link rel="stylesheet" href="/assets/validation_errors.css">
    </head>
    <body>
        <?php view("/partials/nav.php"); ?>
        <h1><?= $heading ?></h1>
        <form method="POST" action="/note">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="NID" value="<?= $note[0]['NID'] ?>">
            <label for="title">Title</label>
            <div>
                <textarea id="title" name="title"><?= $note[0]['title'] ?? '' ?></textarea>
            </div>

            <?php
            if (isset($errors['title'])) : ?>
                 <p class="validation_error"><?= $errors['title']; ?></p>
            <?php endif; ?>

            <label for="body">Your note</label>
            <div>
                <textarea id="body" name="body"><?= $note[0]['body'] ?? '' ?></textarea>
            </div>

            <?php
            if (isset($errors['body'])) : ?>
                <p class="validation_error"><?= $errors['body']; ?></p>
            <?php endif; ?>

            <div>
                <button type="submit">Update</button>
            </div>

            <div>
                <a href="/note?NID= <?= $note[0]['NID'] ?>">Cancel</a>
            </div>
        </form>
        <!-- delete button -->
        <form class="delete-content" method="POST" action="/note">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="NID" value="<?= $note[0]['NID'] ?>">
                <button class="delete-button" style="cursor: pointer; color: white; border: none; background-color: red; text-weight: bold;">Delete note</button>
            </form>
    </body>
</html>