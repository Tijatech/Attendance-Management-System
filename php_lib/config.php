<?php
@session_start();
$loginPage = ["index.php","login.php"];

if(!$_SESSION["authenticated"] && !in_array(basename($_SERVER['PHP_SELF']), $loginPage)){
    header("Location: ".$loginPage[1], true, 302);
    exit;
}