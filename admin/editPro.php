<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    if (!Session::get('login_user'))
    {
        header("Location: index.php");
        exit;
    }

    $pro = Operations::getProduct();

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['category']) && isset($_POST['dec']) && isset($_POST['price']))
        {
            $getID = $_GET['edit_id'] ?? "";
            $cate = $_POST['category'] ?? "";
            $dec = $_POST['dec'] ?? "";
            $price = $_POST['price'] ?? "";
            $img = $_FILES['img'] ?? "";

            $error = User::updateProducts($dec, $price, $img, $cate, $getID);
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
                            <div class="row g-4">
                                <div class="col-sm-12 col-xl-6">
                                    <div class="rounded h-100 pt-4">
                                        <h6 class="mb-4">Products Uploads</h6>
                                        <p class="<?= $error ? 'text-danger' : 'text-success' ?>"><?= $error ?></p>
                                        <form method="POST" enctype="multipart/form-data">
                                            <select class="form-select mb-3" name="category">
                                                <option value="<?= $pro['category']; ?>">Select Category *</option>
                                                <?php
                                                    $data = Operations::getCategory();
                                                    foreach ($data as $d) {
                                                ?>
                                                <option value="<?= $d['uniqid']; ?>"><?= $d['category']; ?></option>
                                                <?php } ?>
                                            </select>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" name="dec" placeholder="" id="floatingTextarea" style="height: 100px;"><?= $pro['dec'] ?></textarea>
                                                <label for="floatingTextarea">Product Description (Optional)</label>
                                            </div>
                                            <div class="mb-3">
                                                <input type="number" name="price" class="form-control" placeholder="Product Price (Optional)" value="<?= $pro['price']; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-control" type="file" name="img" id="formFile">
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Form End -->
                    </div>
                </div>
            </div>
        </div>

        <?php include "temp/footer.php"; ?>
    
    </body>
</html>