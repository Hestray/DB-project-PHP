<nav>
    <div class="navigation">
        <div class="buttons navigation">
            <!-- Current: "color: white; background-color: black;", Default: "whatever" -->
            <a href="/"          style=
                <?= urlIs("/") ? 'color: white; background-color: black;' : ''; ?>>Home</a>
            <a href="/mylibrary" style=
                <?= urlIs("/mylibrary") ? 'color: white; background-color: black;' : ''; ?>>My Library</a>
            <a href="/notes"     style=
                <?= urlIs("/notes") ? 'color: white; background-color: black;' : ''; ?>>Notes</a>
            <a href="/questions" style=
                <?= urlIs("/questions") ? 'color: white; background-color: black;' : ''; ?>>Questions</a>
            <a href="/contactus"       style=
                <?= urlIs("/contactus") ? 'color: white; background-color: black;' : ''; ?>>Contact us</a>
        </div>
        <div class="dropdown profile">
            <button class="dropbtn">My Profile</button>
            <div class="dropdown-content">
                <a href="\profile">Profile</a>
                <a href="\mylibrary">My Library</a>
                <a href="\mynotes">My Notes</a>
                <a href="\myquestions">My Questions</a>
                <a href="\logout">Logout</a>
            </div>
        </div>
    </div>
</nav>