<?php
    require("functions.php");
    showErrors(TRUE);       // turn on errors for everything

    session_start();
    $_SESSION['name'] = "beep?";
    

    require("router.php");

    // route to login/sign up
    // require_once(__ROOT__.'/Authentication/index.php');
?>