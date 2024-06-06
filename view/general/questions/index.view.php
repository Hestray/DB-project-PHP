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
                <p>Here you can see every question on the website!</p>
            </div>
            <div class="list">
                <?php
                if (empty($questions)) :
                    echo "There are no existing questions. How about asking one?";
                else : ?>
                <ul>
                    <?php 
                        foreach ($questions as $question) : ?>
                        <li>
                            <a href="/question?QID=<?= $question['QID'] ?>">
                                <?= htmlspecialchars($question['title']) ?>
                            </a>
                        </li>
                    <?php endforeach; endif; ?>
                </ul>
            </div>

            <div class="create">
                <a href="/questions/create">Ask a question</a>
            </div>
        </main>
        <?php view("/partials/footer.html"); ?>