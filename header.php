<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body class="bg-light">

    <header style="background-color:white;">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <a style="color:black;" class="nav-link" href="#">HOME</a>
                    <a style="color:black;" class="nav-link" href="#">PORTFOLIO</a>
                    <a style="color:black;" class="nav-link" href="#">ABOUT ME</a>
                    <a style="color:black;" class="nav-link" href="#">CONTACT</a>
                </ul>
                <?php
                if (isset($_SESSION["userId"])) {
                    echo '<form action="includes/logout.inc.php" method="post" class="form-inline">
                    <button type="submit" name="logout-submit" class="btn btn-outline-dark">Logout</button>
                </form>';
                } else {
                    echo '<form action="includes/login.inc.php" method="post" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-2 bg-light" type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input class="form-control mr-2 bg-light" type="password" name="pwd" placeholder="Password...">
                    <button type="submit" name="login-submit" class="btn btn-outline-dark mr-2">Login</button>
                </form>
                <a href="signup.php" class="form-inline btn btn-outline-warning my-2 mr-2">Sign up</a>';
                }
                ?>
            </div>
        </nav>
    </header>