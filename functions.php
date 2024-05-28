<?php
/**
 * Dumps and dies. Kills the page when executed on a variable.
 * $value is the variable on which the dump is executed.
 */
function DD($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die($value);
}

/**
 * Shows any existing errors.
 * $active is of type boolean. In order to activate, call this function with TRUE argument
 */
function showErrors($active) {
    if ($active === TRUE) {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    } 
}

/**
 * Requests the url of the current website.
 * return true if the $value is the same as the current website's URI
 */
function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}