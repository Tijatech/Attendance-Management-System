<?php 
    require("php_lib/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EIT Attendance Management | Login</title>
    <?php require_once("./components/assets.php"); ?>
</head>
<body class="loginBody text-center">

<main class="container form-signin">
    <form id="loginForm">
        <img class="mb-4" src="https://eit.edu.ng/eiot2.png" alt="" width="72">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        
        <div class="form-floating formRow">
          <input type="email" name="email" class="form-control" required id="email" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" required class="form-control" id="pass" placeholder="Password">
          <label for="pass">Password</label>
        </div>
        
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    
    </form>
    <div class="pt-3">
      <a href="index.php">Home</a> 
    </div>
    
</main>

    
</body>
</html>