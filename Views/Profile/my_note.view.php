<?php require(__DIR__ . "/../../init.php"); ?>

<!DOCTYPE html>
<body>
    <head>
        <title>My Notes</title>
    </head>
    <body>
        <?php require(__DIR__ . "/../../Views/Partials/nav.php"); ?>
        Something about my notes
        <ul>
            <?php 
                $task_result = $db->query("Select * from notes where note_UID = ?", [1])['result'];
                if ($task_result->num_rows >= 1) :
                    $tasks = $task_result->fetch_all(MYSQLI_ASSOC);
                    foreach ($tasks as $task) : ?>
                    <li>
                        <a href="/notes?NID=<?= $task['NID'] ?>">
                            <?= "{$task['body']}" ?>
                        </a>
                    </li>
            <?php endforeach; endif; ?>
        </ul>
    </body>
</body>