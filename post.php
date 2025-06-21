<?php

    include "libs/load.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <?php include "temp/head.php" ?>

        <link rel="stylesheet preload" href="assets/css/plugins/fontawesome.css" as="style">
        <link rel="stylesheet preload" href="assets/css/plugins/swiper.css" as="style">
        <link rel="stylesheet preload" href="assets/css/plugins/metismenu.css" as="style">
        <link rel="stylesheet preload" href="assets/css/plugins/magnifying-popup.css" as="style">
        <link rel="stylesheet preload" href="assets/css/plugins/odometer.css" as="style">
        <link rel="stylesheet preload" href="assets/css/vendor/bootstrap.min.css" as="style">

        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet preload" as="style">
        <link rel="preload" as="image" href="assets/images/banner/21.webp" />
        <link rel="stylesheet preload" href="assets/css/style.css" as="style">

    </head>

    <body>
        <?php include "temp/header.php" ?>

        <!-- about us area wrapper main -->
        <div class="rts-breadcrumb-area bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-left center">
                            <span class="bg-title">Latest Post</span>
                            <h1 class="title rts-text-anime-style-1">
                                Latest Blogs
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-area">
                <img src="assets/images/about/shape/01.png" alt="shape" class="one" />
                <img src="assets/images/about/shape/02.png" alt="shape" class="two" />
                <img src="assets/images/about/shape/03.png" alt="shape" class="three" />
            </div>
        </div>
        <!-- about us area wrapper main end -->

        <?php
                            
            $blog = Operations::getBlog();
            if (!empty($blog)) {

        ?>
        <div class="blog-details-area-main-wrapper pt--80">
            <div class="container-blog-details">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-details-area-inner-content">
                            <div class="thumbnail-large">
                                <img src="assets/<?= $blog['img']; ?>" alt="Blog Image Not Found">
                            </div>
                            <div class="blog-details-top-wrapper mt-5">
                                <div class="single">
                                    <i class="fa-regular fa-circle-user"></i>
                                    <span>Posted By <?= $blog['owner']; ?></span>
                                </div>
                                <div class="single">
                                    <i class="fa-regular fa-clock"></i>
                                    <span><?= $blog['date']; ?></span>
                                </div>
                                <div class="single">
                                    <i class="fa-regular fa-tags"></i>
                                    <span>Category - <?= $blog['category']; ?></span>
                                </div>
                            </div>
                            <h2 class="title"><?= $blog['title']; ?></h2>
                            <p class="disc">
                                <?= $blog['dec']; ?>
                            </p>
                            <div class="disc">
                                <?= $blog['content']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            } else {
                echo "<p>No data found</p>";
            }
        ?>

        <?php include "temp/footer.php" ?>
    </body>
</html>