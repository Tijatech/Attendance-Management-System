<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System | 4ANet</title>

    <?php require_once("assets.php") ?>
</head>
<body>
    <header style="background: #404eed; color: #ffffff;" >
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="#">4ANet</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <?php if($_SESSION["authenticated"]){ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="api/auth.php?request_type=logout">Logout</a>
                            </li>
                        <?php }else{ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="py-5">
            <div class="container">
                <div class="row justify-content-between w-75">
                    <div class="col-12 col-md-8">
                        <h1 class="display-2">Imagine a place...</h1>
                        <div class="small"> 
                            ...where you can manage all your students' attendance for lectures. 
                            Where you get to see the analytics of students' attendance. 
                            A place that makes it easy to overview the students' presence for your lectures
                        </div>
                        <div class="pt-5">
                            <a class="btn btn-white btn-lg btn-outline-light" href="<?= $_SESSION["authenticated"] ? 'dashboard.php' : 'login.php'?>">Get Started Now </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="https://i.ibb.co/V2SH1Ln/Screenshot-2021-11-17-13-31-09.png" >
                    </div>

                </div>
            </div>
        </div>
    </header>