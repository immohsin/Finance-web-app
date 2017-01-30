<?php

 

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("helpers.php");

    // PHP Library
    require("../phplib.php");
    LIB::init(__DIR__ . "/../datainfo.json");

    // enable sessions
    session_start();

    // require authentication for all pages except /login.php, /logout.php, and /register.php


?>
