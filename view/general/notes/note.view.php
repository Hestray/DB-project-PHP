<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= $heading ?></title>
    </head>
    <body>
        <?php if(!$note) abort(404); ?>
        <?php view("partials/nav.php"); ?>
        <!-- display note content -->
        <!-- title -->
        <div class="content-title">
            <h1><?= htmlspecialchars($note['0']['title']); ?></h1>
        </div>
        
        <a href="/notes/edit?NID=<?= $NID ?>" style="color: white; background-color: teal; padding: 5px; border: none; text-decoration: none;">Edit</a>

        <!-- author -->
        <div class="content-author">
            Note written by
            <h3><?= $note['0']['note_UID']; ?></h3>
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
    </body>
</html>