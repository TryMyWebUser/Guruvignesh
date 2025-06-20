<?php
include "../libs/load.php";

// Start a session
Session::start();
if (!Session::get('login_user')) {
    header("Location: index.php");
    exit;
}

$result = "";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit']) && isset($_FILES['img']) && isset($_POST['title']) && isset($_POST['owner']) && isset($_POST['dt']) && isset($_POST['category']) && isset($_POST['dec']) && isset($_POST['content'])) {
        $img = $_FILES['img'];
        $title = $_POST['title'];
        $owner = $_POST['owner'];
        $dt = $_POST['dt'];
        $cate = $_POST['category'];
        $intro = $_POST['dec'];
        $content = $_POST['content'];
        $result = User::setBlogs($img, $title, $owner, $dt, $cate, $intro, $content);
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
        <style>
            #editor-container {
                height: 300px;
            }
        </style>
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
                            <!-- partial -->
                            <div class="row">
                                <div class="col-md-12 grid-margin">
                                    <div class="row">
                                        <div class="col-12 col-xl-12 mb-4 mb-xl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Blogs Uploads</h4>
                                                    <p class="card-description">
                                                        <?= $result; ?>
                                                    </p>
                                                    <form method="POST" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label>Image upload</label>
                                                            <input type="file" name="img" class="form-control" accept="image/*" required>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Title?</label>
                                                            <input type="text" name="title" class="form-control" required="">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Posted By?</label>
                                                            <input type="text" name="owner" class="form-control" required="">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Date?</label>
                                                            <input type="text" name="dt" class="form-control" required="">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Category?</label>
                                                            <input type="text" name="category" class="form-control" required="">
                                                        </div><br>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Intro Description</label>
                                                            <textarea type="text" name="dec" class="form-control" required=""></textarea>
                                                        </div><br>
                                                        <div id="editor-container"></div>
                                                        <input type="hidden" name="content" id="hidden-content">
                                                        <br>
                                                        <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script>
            var quill = new Quill('#editor-container', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                        ['bold', 'italic', 'underline', 'strike', 'blockquote', 'image'],
                        [{ 'color': [] }], // Enables text color selection
                        [{ 'background': [] }], // Enables background color selection
                        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                        ['link', 'code-block']
                    ]
                }
            });

            document.querySelector('form').addEventListener('submit', function() {
                document.getElementById('hidden-content').value = quill.root.innerHTML;
            });
        </script>
    </body>
</html>