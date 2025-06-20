<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
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
                        <!-- Container starts -->
                        <div class="container-fluid">
                            <!-- Row start -->
                            <div class="row">
                                <div class="col-12 col-xl-12">
                                    <h2 class="mb-2">Welcome, Admin.</h2>
                                    <h6 class="mb-4 fw-normal">
                                        Here's what's happening with your store today.
                                    </h6>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>
                        <!-- Container ends -->
                    </div>
                    <!-- App body ends -->

                    <!-- App footer start -->
                    <div class="app-footer">
                        <span>Designed and Developed by <a href="https://trymywebsites.com/">Trymywebsites</a></span>
                    </div>
                    <!-- App footer end -->
                </div>
                <!-- App container ends -->
            </div>
            <!-- Main container end -->
        </div>
        <!-- Page wrapper end -->

        <?php include "temp/footer.php" ?>
    </body>
</html>