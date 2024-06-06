<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $heading ?></title>
        <link rel="stylesheet" href="assets/content.css">
        <link rel="stylesheet" href="assets/layout.css">
    </head>
    <body>
        <?php if(!$note) abort(404); ?>
        <?php view("partials/nav.php"); ?>
        <main>
            <h1><?= $heading ?></h1>
            <div class="top-container">
                <!-- display note content -->
                <!-- title -->
                <div class="content-title">
                    <h1><?= htmlspecialchars($note['0']['title']); ?></h1>
                </div>
                
                <div class="mid-container">
                    <div class="button">
                        <a href="/notes/edit?NID=<?= $NID ?>" class="post-button" id="edit-button">Edit</a>
                    </div>

                    <!-- author -->
                    <div class="content-author">
                        Note written by
                        <h4><?= $author['0']['username'] ?? 'user deleted'; ?></h4>
                    </div>
                </div>
            </div>
            <!-- content -->
            <div class="content">
                <br>
                <?php
                    $paragraphs = explode("\n", $note[0]['body']);
                    foreach ($paragraphs as $paragraph) 
                        echo '<p class="content-paragraph">' . $paragraph . '</p>';
                ?>
            </div>
            <!-- download-able pdf -->
            <!-- TODO -->
        </main>
        <?php view("/partials/footer.html"); ?>