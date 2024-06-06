<!DOCTYPE html>
<body>
    <head>
        <title>My Profile</title>
        <link rel="stylesheet" href="/assets/layout.css">
        <link rel="stylesheet" href="/assets/validation_errors.css">
        <link rel="stylesheet" href="/assets/profile.css">
    </head>
    <body>
        <?php view("partials/nav.php"); ?>
        <main>
            <h1><?= $heading ?></h1>
            <div class="profile-container">
                <div class="sidenav">
                    <h3>My Profile</h3>
                    <a href="/profile/edit" id="edit">Edit profile</a>
                    <form action="/profile/delete" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button id="delete">Delete account</button>
                    </form>
                    <form action="/logout" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button id="logout">Logout</button>
                    </form>
                </div>
                <div class="user-profile">
                    <section class="cards">
                        <article class="card">
                            <p class="attribute">Username</p>
                            <p class="value"><?= $_SESSION['user']['username']?></p>
                        </article>

                        <article class="card">
                            <p class="attribute">Email</p>
                            <p class="value"><?= $_SESSION['user']['email']?></p>
                        </article>

                        <article class="card">
                            <p class="attribute">ID</p>
                            <p class="value"><?= $_SESSION['user']['id']?></p>
                        </article>
                    </section>
                </div>
            </div>
        </main>
        <?php view("/partials/footer.html"); ?>