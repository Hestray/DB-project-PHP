<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/../../../CSS/validation_errors.css">
    </head>
    <body>
        <h1>Create a note</h1>
        <form action="/notes/create" method="POST">
            <label for="body">Your note</label>
            <textarea id="body" name="body"><?= $_POST['body'] ?? '' ?></textarea>

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