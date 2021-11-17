<?php
@session_start();
$loginPage = "login.php";

if(!$_SESSION["authenticated"] && basename($_SERVER['PHP_SELF']) != $loginPage){
    header("Location: $loginPage", true, 302);
    exit;
}