<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

    $category = Operations::getCategory();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        
        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <?php include "temp/head.php"; ?>
    
    </head>

    <body>
        <div class="page">
            <?php include "temp/header.php" ?>
            <?php include "temp/sideheader.php"; ?>

            <div class="main-content app-content">
                <!-- Form Start -->
                <div class="container-fluid pt-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    if (!empty($category)) {
                                                        foreach ($category as $cate) {
                                                ?>
                                                <tr scope="row" colspan="2">
                                                    <td><?= $cate['category']; ?></td>
                                                    <td>
                                                        <a href="editCate.php?edit_id=<?= $cate['id']; ?>">
                                                            <button type="button" class="btn btn-square btn-outline-info m-2"><i class="ri-pencil-line"></i></button>
                                                        </a>
                                                        <a href="deleteCate.php?delete_id=<?= $cate['id']; ?>">
                                                            <button type="button" class="btn btn-square btn-outline-danger m-2"><i class="ri-delete-bin-line"></i></button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php } } else { echo "<tr><td>Category Not Found</td></tr>"; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form End -->
            </div>
            <?php include "temp/footer.php"; ?>
        </div>
    </body>
</html>