<?php
    require_once("constants.php");

    try {
        $conn = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSERNAME, DBPASSWORD);
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


    function login(array $data){

    }
























?>