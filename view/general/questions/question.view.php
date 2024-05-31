<!DOCTYPE html>
<body>
    <head>
        <title><?= $heading ?></title>
    </head>
    <body>
        <?php view("partials/nav.php"); ?>
        <h1><?= $heading ?></h1>
        Something about my questions
    
        <div>
            <a href="/questions/create">Create a question</a>
        </div>
    </body>
</body>