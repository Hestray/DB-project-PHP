<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $heading ?></title>
        <link rel="stylesheet" href="assets/content.css">
        <link rel="stylesheet" href="assets/layout.css">
    </head>
    <body>
        <?php if(!$question) abort(404); ?>
        <?php view("partials/nav.php"); ?>
        <main>
        <div class="top-container">
            <!-- display question post content -->
            <!-- title -->
            <div class="content-title">
                <h1><?= htmlspecialchars($question['0']['title']); ?></h1>
            </div>
            
            <div class="mid-container">
                <div class="button">
                    <a href="/questions/edit?QID=<?= $QID ?>">Edit</a>
                </div>

                <!-- author -->
                <div class="content-author">
                    Question asked by
                    <h4><?= $author['0']['username'] ?? 'user deleted'; ?></h4>
                </div>
            </div>
        </div>
            <!-- content -->
            <div class="content">
                <br>
                <?php
                    $paragraphs = explode("\n", $question[0]['body']);
                    foreach ($paragraphs as $paragraph) 
                        echo '<p class="content-paragraph">' . $paragraph . '</p>';
                ?>
            </div>
        </main>
        <?php view("/partials/footer.html"); ?>