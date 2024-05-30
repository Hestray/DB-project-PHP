<?php require base_path("init.php"); ?>
<?php 
    $id = $_GET['id'];    // this should be read from whatever the user tries to give in the url
    if ($id != $_SESSION['id']) {
        abort(403);
    }
?>

<!DOCTYPE html>
<body>
    <head>
        <title><?= $heading ?></title>
    </head>
    <body>
        <?php view("partials/nav.php"); ?>
        Something about my questions
        <ul>
            <?php 
                $tasks = $db->select("Select * from notes where note_UID = ?", [$id]);
                    foreach ($tasks as $task) : ?>
                    <li>
                        <a href="/notes?NID=<?= $task['NID'] ?>">
                            <?= "{$task['body']}" ?>
                        </a>
                    </li>
            <?php endforeach; //endif; ?>
        </ul>

        <div>
            <a href="/questions/create">Create a question</a>
        </div>
    </body>
</body>