<!DOCTYPE html>
<body>
    <head>
        <title><?= $heading ?></title>
    </head>
    <body>
        <?php view("partials/nav.php"); ?>
        <h1><?= $heading ?></h1>
        Something about my notes
        <ul>
            <?php 
                foreach ($notes as $note) : ?>
                <li>
                    <a href="/notes?NID=<?= $note['NID'] ?>">
                        <?= "{$note['title']}" ?>
                    </a>
                </li>
            <?php endforeach; //endif; ?>
        </ul>

        <div>
            <a href="/notes/create">Create a note</a>
        </div>
    </body>
</body>