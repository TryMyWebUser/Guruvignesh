<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['category']) && isset($_POST['sub']))
        {
            $cate = $_POST['category'] ?? "";
            $sub = $_POST['sub'] ?? "";
            $error = User::setCategory($cate, $sub);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <?php include "temp/head.php" ?>
    </head>

    <body>
        <!-- Page wrapper start -->
        <div class="page-wrapper">
            <!-- Main container start -->
            <div class="main-container">
                <!-- Sidebar wrapper start -->
                <?php include "temp/sideheader.php" ?>
                <!-- Sidebar wrapper end -->

                <!-- App container starts -->
                <div class="app-container">
                    <!-- App header starts -->
                    <?php include "temp/header.php" ?>
                    <!-- App header ends -->

                    <!-- App body starts -->
                    <div class="app-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 col-md-8 col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <p style="color: <?= $error ? 'red' : 'green'; ?>;"><?= $error ?></p>
                                            <form method="POST">
                                                <div class="form-group mb-4">
                                                    <label class="form-label">Category?</label>
                                                    <input type="text" class="form-control" name="category" required>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label class="form-label">Sub Category?</label>
                                                    <input type="text" class="form-control" name="sub" required>
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "temp/footer.php"; ?>

    </body>
</html>