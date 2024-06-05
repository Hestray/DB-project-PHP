<?php
use Core\Validator;
use Core\App;
use Core\Database;

$email      = $_POST['email'];
$username   = $_POST['username'];
$password   = $_POST['password'];

// validate credentials
$errors = [];
if (Validator::bodyCheck($password, 8, 255) == -1)
    $errors['password'] = "Password must be of at least 8 characters.";
else if (Validator::bodyCheck($password, 8, 255) == 1)
    $error['password'] = "Password cannot be more than 255 characters.";

if (!Validator::email($email)) $errors['email'] = "Email address must be valid.";

if (!empty($errors)) {
    return view("../authentication/view/sign_up.view.php",
    [
        'errors' => $errors,
        'heading' => 'Sign up'
    ]);
}

$db = App::resolve(Database::class);
// check if account already exists
$user = $db->select("Select * from users where email = ?", [$email]);
// Yes: redirect to login
if ($user) {
    header("location: /login");
    die();
} else {
    // No: save, log user in and redirect
    $db->modify("Insert into users
                (username, email, password)
                VALUES(?, ?, ?)",
            [
                $username,
                $email,
                password_hash($password, PASSWORD_BCRYPT)
            ]);

    $NID = $db->lastInsertID();
    $_SESSION['user'] = [
        'id' => $NID,
        'email' => $email,
        'username' => $username
    ];

    header("location: /");
    die();
}