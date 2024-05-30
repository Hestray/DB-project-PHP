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
            Title is
            <b><?= htmlspecialchars($note['0']['title']); ?></b>
        </div>
        <!-- delete button -->
        <form class="delete-content" method="POST">
            <button class="delete-button" style="color: white; border: none; background-color: red; text-weight: bold;">Delete note</button>
        </form>
        <!-- author -->
        <div class="content-author">
            Note written by
            <b><?= $note['0']['note_UID']; ?></b>
        </div>
        <!-- content -->
        <div class="content">
            <br>
            <?php
                $paragraphs = explode("\n", $note[0]['body']);
                DD($paragraphs);
                foreach ($paragraphs as $paragraph) 
                    echo '<p class="content-paragraph">' . htmlspecialchars($paragraph) . '</p>';
            ?>
        </div>
        <!-- download-able pdf -->
        <!-- TODO -->
    </body>
</html>