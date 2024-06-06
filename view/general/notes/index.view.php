<!DOCTYPE html>
<body>
    <head>
        <title><?= $heading ?></title>
        <link rel="stylesheet" href="assets/content.css">
        <link rel="stylesheet" href="assets/layout.css">
    </head>
    <body>
        <?php view("partials/nav.php"); ?>
        <main>
            <h1><?= $heading ?></h1>
            <div class="description">
                <p>Here you can see every note on the website!</p>
            </div>
            <div class="list">
                <?php
                if (empty($notes)) :
                    echo "There are no existing notes. How about writing one?";
                else : ?>
                <ul>
                    <?php 
                        foreach ($notes as $note) : ?>
                        <li>
                            <a href="/note?NID=<?= $note['NID'] ?>">
                                <?= htmlspecialchars($note['title']) ?>
                            </a>
                        </li>
                    <?php endforeach; endif; ?>
                </ul>
            </div>
            <div class="create">
                <a href="/notes/create">Create a note</a>
            </div>
        </main>
        <?php view("/partials/footer.html"); ?>