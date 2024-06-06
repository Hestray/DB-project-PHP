<!DOCTYPE html>
<html lang="en">
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
                <p>Here you can see your posts!</p>
            </div>
            <section class="cards">
                <article class="card" id="card-1">
                    <h3>YOUR NOTES</h3>
                    <hr>
                    <div class="card-list">
                    <?php
                    if (empty($notes)) :
                        echo "<p>There are no existing notes.</p>";
                        echo "<p>How about writing one?</p>";
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
                </article>

                <article class="card" id="card-2">
                    <h3>YOUR QUESTIONS</h3>
                    <hr>
                    <div class="card-list">
                    <?php
                    if (empty($questions)) :
                        echo "<p>There are no existing questions.</p>";
                        echo "<p>How about asking one?</p>";
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
                </article>
            </section>
        </main>
        <?php view("/partials/footer.html"); ?>