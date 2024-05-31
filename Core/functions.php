<?php
/**
 * Dumps and dies. Kills the page when executed on a variable.
 * @param $value is the variable on which the dump is executed.
 */
function DD($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die($value);
}

/**
 * Activates in order to display any existing errors. By default, they are off
 * @param boolean $active is of type boolean. In order to activate, call this function with TRUE argument
 */
function showErrors($active = FALSE) {
    if ($active === TRUE) {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    } 
}

/**
 * Requests the url of the current website.
 * @return bool true if the $value is the same as the current website's URI
 */
function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404) {
    http_response_code($code);
    require base_path("/view/partials/{$code}.php");
    die();
}

/**
 * This will check if the given condition is true
 * @param $condition is any expression that has a true or false return
 * @param int $status represents the https status code that will 'kill' the page
 * @return bool true if condition is true, otherwise redirect to https status error code 
 */
function authorize($condition, $status = 403) {
    if (!$condition) abort($status);
    return true;
}

/**
 * @param string $path is the relative path of the file that we want to access
 * @return string the absolute path of the file
 */
function base_path($path) {
    return BASE_PATH . $path;
}

/**
 * This method will require the file at the relative path, as well as any of the attributes from the file that is calling this function
 * @param string $path is the relative path of the file we want to access
 * @param array $attributes are the variables that must be passed to the file we want to access
 */
function view($path, $attributes = []) {
    extract($attributes);
    require base_path('view/' . $path); 
}

/**
 * Verifies if there is an active session.
 * @return bool true if the session is not empty, false if it is empty.
 */
function loggedIn() {
    return !empty($_SESSION['username']);
}

/**
 * Checks that the session is not empty and if so, empties it, effectively logging the user out
 */
function logout() {
    if (!empty($_SESSION['username']))
        unset($_SESSION['username']);
}