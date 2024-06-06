<!DOCTYPE html>
<body>
    <head>
        <title>Edit your profile</title>
        <link rel="stylesheet" href="/assets/layout.css">
        <link rel="stylesheet" href="/assets/validation_errors.css">
        <link rel="stylesheet" href="/assets/profile.css">
        <link rel="stylesheet" href="/assets/content.css">
    </head>
    <body>
        <?php view("/partials/nav.php"); ?>
        <main>
            <h1><?= $heading ?></h1>
            <form method="POST" action="/profile">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="UID" value="<?= $_SESSION['user']['id'] ?>">
                <label for="username">Username</label>
                <div>
                    <input type="text" id="username" name="username" value="<?= $_SESSION['user']['username'] ?? '' ?>">
                </div>

                <?php
                if (isset($errors['username'])) : ?>
                        <p class="validation_error"><?= $errors['username']; ?></p>
                <?php endif; ?>

                <label for="email">Email</label>
                <div>
                    <input type="email" id="email" name="email" value="<?= $_SESSION['user']['email'] ?? '' ?>">
                </div>

                <?php
                if (isset($errors['email'])) : ?>
                    <p class="validation_error"><?= $errors['email']; ?></p>
                <?php endif; ?>

                <div>
                    <button type="submit">Edit</button>
                </div>

                <div class="cancel">
                    <a href="/profile">Cancel</a>
                </div>
            </form>
        </main>
        <?php view("/partials/footer.html"); ?>
    </body>
</body>