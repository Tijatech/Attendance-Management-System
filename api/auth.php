<?php
require_once("../php_lib/helper.php");

$rsp["status"] = false;
$rsp["message"] = "Request Invalid";

$rqst = $_POST["request_type"] ? $_POST["request_type"] : $_GET["request_type"];

if(isset($rqst)){
    if($rqst === "login"){
        $auth = login($_POST);
        $rsp["status"] = $auth ? true : false;
        $rsp["message"] = $auth ? "Login Successful. Redirecting..." : "Looks like something is wrong. Check your credentials.";
        
    }else if($rqst === "signup"){
        $auth = signup($_POST);
        $rsp["status"] = $auth ? true : false;
        $rsp["message"] = $auth ? "Account Created Successful. Redirecting..." : "Looks like something is wrong. Please Try again";
    }else if($rqst === "logout"){
        session_unset();
        header("Location: /attms/index.php", true, 302);
        exit;
    }
}


echo json_encode($rsp);

?>