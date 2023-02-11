<?php

session_start();

if (empty($_SESSION["lang"])) {
    $_SESSION["lang"]  = 1;
}
if (isset($_POST['lang'])){
    
    $_SESSION["lang"]  =  $_POST["lang"];
    
}

    ini_set("display_errors", true); // Change it to false when live



    date_default_timezone_set('Asia/Calcutta');


    define("SERVER", "localhost");



    // define("DB_USERNAME", "loopdarx_democlass");



    // define("DB_PASSWORD", "7[.pTxkZ0}yX");



    // define("DATABASE", "loopdarx_democlass");

    define("DB_USERNAME", "root");



    define("DB_PASSWORD", "");



    define("DATABASE", "crowd_ngo");


    define("SITE_NAME", "Helping NGO");
    



    // Message Type



    define("MSG_ERROR", "1");



    define("MSG_WARNING", "2");



    define("MSG_SUCCESS", "3");



    define("MSG_INFORMATION", "4");



?>