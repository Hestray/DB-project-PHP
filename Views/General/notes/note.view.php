<?php require __DIR__ . "/../../init.php"; ?>
<?php 
    $_SESSION['UID'] = 2;
    $id = $_GET['id'];    // this should be read from whatever the user tries to give in the url
    if ($id != $_SESSION['UID']) {
        abort(403);
    }
?>

<!DOCTYPE html>
<body>
    <head>
        <title>My Notes</title>
    </head>
    <body>
        <?php require __DIR__ . "/../../views/partials/nav.php"; ?>
        Something about my notes
        <ul>
            <?php 
                $tasks = $db->select("Select * from notes where note_UID = ?", [$id]);
                    foreach ($tasks as $task) : ?>
                    <li>
                        <a href="/notes?NID=<?= $task['NID'] ?>">
                            <?= htmlspecialchars($task['body']) ?>
                        </a>
                    </li>
            <?php endforeach; //endif; ?>
        </ul>

        <div>
            <a href="/notes/create">Create a note</a>
        </div>
    </body>
</body>