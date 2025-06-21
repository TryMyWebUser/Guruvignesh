<?php

include "../libs/load.php";

// Start a session
Session::start();

if (!Session::get('login_user')) {
    header("Location: index.php");
    exit;
}

$our = Operations::getEditOur();

$success = "";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit_our'])) {
        $getID = $_GET['edit_id'] ?? "";
        $cate = $_POST['category'] ?? "";
        $whom = $_POST['whom'] ?? "";
        $deliver = $_POST['deliver'] ?? "";
        $solution = $_POST['solution'] ?? "";
        $get = $_POST['get'] ?? "";

        $success = User::updateOur($whom, $deliver, $solution, $get, $cate, $getID);
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
                                        <h6 class="mb-4">Deliver / Solution / Get Uploads</h6>
                                        <p class="<?= $success ? 'text-danger' : 'text-success' ?>"><?= $success ?></p>
                                        <form method="POST" id="our-form">
                                            <select class="form-select mb-3" name="category">
                                                <option disabled>Select Category *</option>
                                                <?php
                                                $category = Operations::getCategory();
                                                foreach ($category as $cate) :
                                                    $selected = ($cate['uniqid'] === $our['category']) ? 'selected' : '';
                                                ?>
                                                    <option value="<?= $cate['uniqid'] ?>" <?= $selected ?>><?= $cate['category'] ?></option>
                                                <?php endforeach; ?>
                                            </select><br>

                                            <!-- Whom -->
                                            <label for="Whom Is This For?">Whom Is This For?</label>
                                            <div id="editor-whom" style="height: 200px;"></div>
                                            <input type="hidden" name="whom" id="hidden-whom" value="<?= htmlspecialchars($our['whom'], ENT_QUOTES, 'UTF-8'); ?>">
                                            <br>

                                            <!-- Deliver -->
                                            <label for="What We Deliver?">What We Deliver?</label>
                                            <div id="editor-deliver" style="height: 200px;"></div>
                                            <input type="hidden" name="deliver" id="hidden-deliver" value="<?= htmlspecialchars($our['deliver'], ENT_QUOTES, 'UTF-8'); ?>">
                                            <br>

                                            <!-- Solution -->
                                            <label for="Why Our Solution Works?">Why Our Solution Works?</label>
                                            <div id="editor-solution" style="height: 200px;"></div>
                                            <input type="hidden" name="solution" id="hidden-solution" value="<?= htmlspecialchars($our['solution'], ENT_QUOTES, 'UTF-8'); ?>">
                                            <br>

                                            <!-- Get -->
                                            <label for="What you get?">What you get?</label>
                                            <div id="editor-get" style="height: 200px;"></div>
                                            <input type="hidden" name="get" id="hidden-get" value="<?= htmlspecialchars($our['get'], ENT_QUOTES, 'UTF-8'); ?>">
                                            <br>

                                            <button type="submit" name="submit_our" class="btn btn-primary">Save</button>
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

            // Fill editors with existing data
            quillWhom.clipboard.dangerouslyPasteHTML(<?= json_encode($our['whom']) ?>);
            quillDeliver.clipboard.dangerouslyPasteHTML(<?= json_encode($our['deliver']) ?>);
            quillSolution.clipboard.dangerouslyPasteHTML(<?= json_encode($our['solution']) ?>);
            quillGet.clipboard.dangerouslyPasteHTML(<?= json_encode($our['get']) ?>);

            // Update hidden fields before submitting
            document.getElementById("our-form").addEventListener("submit", function (e) {
                document.getElementById("hidden-whom").value = quillWhom.root.innerHTML;
                document.getElementById("hidden-deliver").value = quillDeliver.root.innerHTML;
                document.getElementById("hidden-solution").value = quillSolution.root.innerHTML;
                document.getElementById("hidden-get").value = quillGet.root.innerHTML;
            });
        </script>

    </body>
</html>