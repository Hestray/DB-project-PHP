<?php

use Core\Validator;
use Core\Database;
use Core\App;

$email      = $_POST['email'];
$username   = $_POST['username'];
$password   = $_POST['password'];

// validate credentials
$errors = [];
if (Validator::bodyCheck($password, 8, 255) != 0)
    $errors['password'] = "Please provide a valid password.";

if (!Validator::email($email)) $errors['email'] = "Please provide a valid email.";

if (!empty($errors)) {
    return view("../authentication/view/login.view.php",
    [
        'errors' => $errors,
        'heading' => 'Login'
    ]);
}

$db = App::resolve(Database::class);

$user = $db->select("Select * from users where 
                    email = ? and  
                    username = ?", 
                    [
                        $email,
                        $username
                    ]);
 
if ($user) {
    if (password_verify($password, $user[0]['password'])) {
        $_SESSION['user'] = [
            'id' => $user[0]['UID'],
            'email' => $email,
            'username' => $username
        ];
        
        // regenerate the session id
        session_regenerate_id(true);
        
        header("location: /");
        die();
    }
    $errors['password'] = "Incorrect password.";
}
$errors['user'] = "No matching account found for the given email and username.";

return view("../authentication/view/login.view.php",
[
    'errors' => $errors,
    'heading' => 'Login'
]);