<?php
    include "../libs/load.php";

    // Start session
    Session::start();

    // Redirect if user is not logged in
    if (!Session::get('login_user')) {
        header("Location: index.php");
        exit;
    }

    // Get Blog ID from URL
    if (!isset($_GET['edit_id']) || empty($_GET['edit_id'])) {
        header("Location: viewBlogs.php"); // Redirect if no valid ID is found
        exit;
    }

    $result = "";
    $getID = (int)$_GET['edit_id'];

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['submit']) && isset($_POST['title']) && isset($_POST['owner']) && isset($_POST['dt']) && isset($_POST['category']) && isset($_POST['dec']) && isset($_POST['content'])) {
            $img = $_FILES['img'] ?? null;
            $title = $_POST['title'];
            $owner = $_POST['owner'];
            $dt = $_POST['dt'];
            $cate = $_POST['category'];
            $intro = $_POST['dec'];
            $content = $_POST['content'];
            
            $blog = Operations::getBloger();
            $targetDir = "../uploads/blogs/"; // Define your upload directory

            if (!is_dir($targetDir)) {
                // Create directory with proper permissions
                mkdir($targetDir, 0777, true);
            }

            $allowTypes = ['jpg', 'png', 'jpeg', 'gif'];
            $uploadedImagePath = "";

            // Process the image if it exists
            if (!empty($img['name'])) {
                $fileName = basename($img['name']);
                $filePath = $targetDir . $fileName;
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                if (in_array($fileType, $allowTypes)) {
                    if (move_uploaded_file($img['tmp_name'], $filePath)) {
                        $uploadedImagePath = $filePath; // Save the file path
                    } else {
                        $result = "Error uploading the image.";
                    }
                } else {
                    $result = "Invalid file type. Allowed types are: " . implode(", ", $allowTypes);
                }
            }

            // Build SQL query
            if (!empty($uploadedImagePath)) {
                unlink($blog['img']);
                $sql = "UPDATE `blogs` SET `img` = '$uploadedImagePath', `title` = '$title', `owner` = '$owner', `date` = '$dt', `category` = '$cate', `dec` = '$intro', `content` = '$content', `created_at` = NOW() WHERE `id` = '$getID'";
            } else {
                $sql = "UPDATE `blogs` SET `title` = '$title', `owner` = '$owner', `date` = '$dt', `category` = '$cate', `dec` = '$intro', `content` = '$content', `created_at` = NOW() WHERE `id` = '$getID'";
            }

            // Execute query
            if ($conn->query($sql)) {
                header("Location: viewBlogs.php");
                exit;
            } else {
                $result = "Error occurred while saving data: " . $conn->error;
            }
        }
    }

    $blog = Operations::getBloger();
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
                            <div class="main-panel">
                                <div class="content-wrapper">
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
                                                                    <input type="file" name="img" class="form-control" accept="image/*">
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label for="exampleInputName1">Title?</label>
                                                                    <input type="text" name="title" class="form-control" value="<?= $blog['title']; ?>">
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label for="exampleInputName1">Posted By?</label>
                                                                    <input type="text" name="owner" class="form-control" value="<?= $blog['owner']; ?>">
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label for="exampleInputName1">Date?</label>
                                                                    <input type="text" name="dt" class="form-control" value="<?= $blog['date']; ?>">
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label for="exampleInputName1">Category?</label>
                                                                    <input type="text" name="category" class="form-control" value="<?= $blog['category']; ?>">
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label for="exampleInputName1">Intro Description</label>
                                                                    <textarea type="text" name="dec" class="form-control"><?= $blog['dec']; ?></textarea>
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label class="form-label">Content</label>
                                                                    <div id="editor-container"><?= htmlspecialchars_decode($blog['content']); ?></div>
                                                                    <input type="hidden" name="content" id="hidden-content">
                                                                </div><br>
                                                                <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
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
                    </div>
                </div>
            </div>
        </div>        

        <?php include "temp/footer.php"; ?>
        
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script>
            var quill = new Quill('#editor-container', {
                theme: 'snow',
                modules: {
                    toolbar: [
                        [{ 'header': [1, 2, 3, false] }],
                        ['bold', 'italic', 'underline'],
                        [{ 'color': [] }],
                        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                        ['link', 'code-block']
                    ]
                }
            });

            // Load existing content into Quill editor
            quill.root.innerHTML = `<?= htmlspecialchars_decode($blog['content']); ?>`;

            document.querySelector('form').addEventListener('submit', function() {
                document.getElementById('hidden-content').value = quill.root.innerHTML;
            });
        </script>
    </body>
</html>