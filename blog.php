<?php
    include "libs/load.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <?php include "temp/head.php" ?>

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
                            <!-- <p class="disc">
                                With a team of experienced professionals and a passion for innovation, we combine cutting-edge strategies
                            </p> -->
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

        <div class="rts-blog-list-area rts-section-gapBottom bg-white">
            <div class="container">
                <div class="row g-5">
                    <?php
                    $data = Operations::getBlogs();
                    if (!empty($data)) {
                        foreach ($data as $blog) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12" data-animation="fadeInUp" data-delay="0.1">
                        <div class="single-blog-area-one column-reverse">
                            <p>Posted By / <span><?= $blog['owner'] ?></span></p>
                            <a href="post.php?data=<?= $blog['id']; ?>">
                                <h4 class="title"><?= $blog['title']; ?></h4>
                            </a>
                            <div class="bottom-details">
                                <a href="post.php?data=<?= $blog['id']; ?>" class="thumbnail">
                                    <img src="assets/<?= $blog['img'] ?>" alt="Blogs Image Not Found" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        } else {
                            echo "<p>Blogs Not Found!</p>";
                        }
                    ?>
                </div>
                <!-- rts-blog post end area -->
            </div>
        </div>

        <?php include "temp/footer.php" ?>

    </body>
</html>