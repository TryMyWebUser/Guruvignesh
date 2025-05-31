<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    // Redirect if the user is already logged in
    if (Session::get('login_user'))
    {
        header('Location: welcome.php');
        exit;
    }

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']))
        {
            $username = $_POST['username'] ?? "";
            $password = $_POST['password'] ?? "";
            $error = User::login($username, $password);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Admin - Login</title>
        <link rel="shortcut icon" href="assets/images/favicon.svg" />

        <!-- *************
			************ CSS Files *************
		************* -->
        <!-- Icomoon Font Icons css -->
        <link rel="stylesheet" href="assets/fonts/icomoon/style.css" />

        <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/main.min.css" />
    </head>

    <body class="login-bg">
        <!-- Container starts -->
        <div class="container">
            <!-- Auth wrapper starts -->
            <div class="auth-wrapper">
                <!-- Form starts -->
                <form method="POST">
                    <div class="auth-box">
                        <a href="index.php" class="auth-logo mb-4">
                            <img src="assets/images/logo-dark.svg" alt="Best Admin Templates" />
                        </a>

                        <h4 class="mb-4">Admin Login</h4>
                        <p class="f-s-12 <?= $error ? 'text-danger' : 'text-success' ?>"><?= $error ?></p>

                        <div class="mb-3">
                            <label class="form-label" for="email">Your Username <span class="text-danger">*</span></label>
                            <input type="text" id="email" name="username" class="form-control" placeholder="Enter your username" required/>
                        </div>

                        <div class="mb-2">
                            <label class="form-label" for="pwd">Your password <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="password" id="pwd" name="password" class="form-control" placeholder="Enter password" required/>
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="icon-eye-off"></i>
                                </button>
                            </div>
                        </div>

                        <div class="mb-3 d-grid gap-2">
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
                <!-- Form ends -->
            </div>
            <!-- Auth wrapper ends -->
        </div>
        <!-- Container ends -->
    </body>
</html>