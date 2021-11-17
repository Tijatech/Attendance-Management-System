<?php
    @session_start();
    require_once("constants.php");

    try {
        $conn = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSERNAME, DBPASSWORD);
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }


    function login(array $data) {
        global $conn;
        $email = $data["email"];
        $password = crypt($data['password'], '$12$hrd$reer');
        $stmt = $conn->prepare("SELECT id, name, avatar FROM users WHERE email = ? AND password = ? LIMIT 1");
        $stmt->execute([$email, $password]);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetch();
        if($user){
            $_SESSION["authenticated"] = true;
            $_SESSION["user"] = $user["name"];
            $_SESSION["role"] = $user["role"];
            return true;
        }
        return false;
    }
    
    function signup(array $data){
        global $conn;
        $email = $data["email"];
        $password = password_hash($data["password"],PASSWORD_DEFAULT);
        $smt = $conn->prepare("SELECT id, name, avatar FROM users WHERE email = ? AND password = ?");
        $data = $smt->execute([$email, $password]);
        return $data;
    }























?>