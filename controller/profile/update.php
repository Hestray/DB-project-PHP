<?php
// this file deals with the update query
use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

// retrieve the corresponding note
$user = $db->select("Select UID, username, email from users where UID = ?", [$_SESSION['user']['id']]);

// authorize
authorize($_SESSION['user']['id'] === $user[0]['UID']);

// validate
if (Validator::bodyCheck($_POST['username'], 0, 255) == 1)
    $errors['username'] = "Username length exceeds maximum of 255 characters.";
elseif (Validator::bodyCheck($_POST['username'], 0, 255) == -1)
    $errors['username'] = "Username cannot be empty!";

if (!Validator::email($user[0]['email'])) $errors['email'] = "Email address must be valid.";

if (!empty($errors)) {
    return view("profile/edit.view.php",
    [
        'errors' => $errors,
        'heading' => 'Edit profile'
    ]);
}

// insert into database if no errors
$num = $db->modify('UPDATE users
    SET username = ?, email = ?
    WHERE UID = ?', 
    [
        $username   = $_POST['username'],
        $email      = $_POST['email'],
        $UID        = $_SESSION['user']['id']
    ]);
$_SESSION['user']['username'] = $_POST['username'];
$_SESSION['user']['email'] = $_POST['email'];
header("location: /profile");
die();
