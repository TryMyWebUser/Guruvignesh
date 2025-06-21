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
    $success = "";
    
    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // die();
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['category']) && isset($_POST['dec']) && isset($_POST['price']) && isset($_FILES['img']))
        {
            $cate = $_POST['category'] ?? "";
            $dec = $_POST['dec'] ?? "";
            $price = $_POST['price'] ?? "";
            $img = $_FILES['img'] ?? "";

            $error = User::setProducts($dec, $price, $img, $cate);
        }

        if (isset($_POST['submit_our']))
        {
            $cate = $_POST['category'] ?? "";
            $whom = $_POST['whom'] ?? "";
            $deliver = $_POST['deliver'] ?? "";
            $solution = $_POST['solution'] ?? "";
            $get = $_POST['get'] ?? "";

            $success = User::setOur($whom, $deliver, $solution, $get, $cate);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <?php include "temp/head.php" ?>

        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

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
                                            <select class="form-select mb-3" name="category" required>
                                                <option>Select Category *</option>
                                                <?php
                                                    $category = Operations::getCategory();
                                                    foreach ($category as $cate) :
                                                ?>
                                                <option value="<?= $cate['uniqid'] ?>"><?= $cate['category'] ?></option>
                                                <?php
                                                    endforeach;
                                                ?>
                                            </select>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" name="dec" placeholder="" id="floatingTextarea" style="height: 100px;"></textarea>
                                                <label for="floatingTextarea">Product Description (Optional)</label>
                                            </div>
                                            <div class="mb-3">
                                                <input type="number" name="price" class="form-control" placeholder="Product Price (Optional)">
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-control" type="file" name="img" id="formFile" accept="image/*" required>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-4 mt-4">
                                <div class="col-sm-12 col-xl-6">
                                    <div class="rounded h-100 pt-4">
                                        <h6 class="mb-4">Deliver / Solution / Get Uploads</h6>
                                        <p class="<?= $success ? 'text-danger' : 'text-success' ?>"><?= $success ?></p>
                                        <form method="POST" id="our-form">
                                            <select class="form-select mb-3" name="category" required>
                                                <option>Select Category *</option>
                                                <?php
                                                    $category = Operations::getCategory();
                                                    foreach ($category as $cate) :
                                                ?>
                                                <option value="<?= $cate['uniqid'] ?>"><?= $cate['category'] ?></option>
                                                <?php
                                                    endforeach;
                                                ?>
                                            </select><br>
                                            <!-- Whom -->
                                            <label for="Whom Is This For?">Whom Is This For?</label>
                                            <div id="editor-whom" style="height: 200px;"></div>
                                            <input type="hidden" name="whom" id="hidden-content1">
                                            <br>
                                            <!-- Deliver -->
                                            <label for="What We Deliver?">What We Deliver?</label>
                                            <div id="editor-deliver" style="height: 200px;"></div>
                                            <input type="hidden" name="deliver" id="hidden-content2">
                                            <br>
                                            <!-- Solution -->
                                            <label for="Why Our Solution Works?">Why Our Solution Works?</label>
                                            <div id="editor-solution" style="height: 200px;"></div>
                                            <input type="hidden" name="solution" id="hidden-content3">
                                            <br>
                                            <!-- Get -->
                                            <label for="What you get?">What you get?</label>
                                            <div id="editor-get" style="height: 200px;"></div>
                                            <input type="hidden" name="get" id="hidden-content4">
                                            <br>
                                            <button type="submit" name="submit_our" class="btn btn-primary">Upload</button>
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

        <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
        <script>
            const quillWhom = new Quill('#editor-whom', { theme: 'snow' });
            const quillDeliver = new Quill('#editor-deliver', { theme: 'snow' });
            const quillSolution = new Quill('#editor-solution', { theme: 'snow' });
            const quillGet = new Quill('#editor-get', { theme: 'snow' });

            const form = document.getElementById("our-form");
            form.addEventListener("submit", function (e) {
                // e.preventDefault();

                document.getElementById("hidden-content1").value = quillWhom.root.innerHTML;
                document.getElementById("hidden-content2").value = quillDeliver.root.innerHTML;
                document.getElementById("hidden-content3").value = quillSolution.root.innerHTML;
                document.getElementById("hidden-content4").value = quillGet.root.innerHTML;

                form.requestSubmit();
            });
        </script>


    </body>
</html>