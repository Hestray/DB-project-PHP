<nav>
    <nav class="navigation">
        <div class="topnav">
        <?php if ($_SESSION['user'] ?? false) : ?>
            <a href="/">Home</a>
            <a href="/dashboard">Dashboard</a>
            <a href="/notes">Notes</a>
            <a href="/questions">Questions</a>
            <a href="/contactus">Contact us</a>
        </div>
        <div class="dropdown profile">
            <button class="dropbtn">My Profile</button>
            <div class="dropdown-content">
                <a href="\profile">Profile</a>
                <a href="\dashboard">Dashboard</a>
                <form id="nav-form" action="\logout" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button id="logout">Logout</button>
                </form>
            </div>
        </div>
        <?php endif; ?>
    </nav>
</nav>