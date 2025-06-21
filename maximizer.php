<?php

    include "libs/load.php";

    $conn = Database::getConnect();
    $pro = Operations::getProductWhere();
    $our = Operations::getOur();
    $cate = $pro['category'];
    $qry = $conn->query("SELECT * FROM `category` where `uniqid` = '$cate' ")->fetch_array();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <?php include "temp/head.php" ?>

        <style>
            header {
                background: #000 !important;
            }
            img.block.d-none {
                display: block !important;
            }
            ul {
                list-style: disc;
            }
            textarea {
                min-height: 150px;
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
        </style>

    </head>

    <body>
        <?php include "temp/header.php" ?>

        <div class="page-wrapper radious-none-button">

            <!-- about us area wrapper main -->
            <div class="rts-breadcrumb-area bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" style="margin-top: 10rem;">
                            <div class="title-area-left center">
                                <span class="bg-title"><?= $qry['category'] ?></span>
                                <h1 class="title rts-text-anime-style-1">
                                    <?= $qry['category'] ?>
                                </h1>
                                <hr style="border: 1px solid #000; width: 36rem; place-self: center;">
                                <p class="disc" style="color: #009688;">
                                    <b style="letter-spacing: 2px;"><?= $qry['sub_category'] ?></b>
                                </p>
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

            <!-- rts about area start -->
            <div class="rts-about-five-area rts-section-gapBottom bg-white pb-100">
                <div class="container-full">
                    <div class="row align-items-center">
                        <div class="col-lg-6 pr--70 pr_md--0 pr_sm--0">
                            <div class="thumbnail-about-five">
                                <img src="assets/<?= $pro['img'] ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 mt_md--30 mt_sm--30">
                            <div class="about-content-inner-five">
                                <div class="inner-about-home-7">
                                    <p class="mb-3"><?= $pro['dec'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rts about area end -->

            <!-- rtsd faq area start -->
            <div class="rts-faq-area rts-section-gap faq-bg-one bg_image">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="faq-main-wrapper-content-inner-four">
                                <div class="title-style-four left">
                                    <h2 class="title" style="justify-self: center; color: #b5b5b5; letter-spacing: 2px; font-size: 16px;">"It’s your vision - accelerated, tested and ready to thrive"</h2>
                                </div>
                                <div class="accordion mt--40" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                                                Whom Is This For?
                                            </button>
                                        </h2>
                                        <div id="collapseZero" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body" style="padding-left: 60px;">
                                                <?= $our['whom'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                What We Deliver?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body" style="padding-left: 60px;">
                                                <?= $our['deliver'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Why Our Solution Works?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body" style="padding-left: 60px;">
                                                <?= $our['solution'] ?>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What you Get?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?= $our['get'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#businessmax" class="btn-primary btn-white" style="border-radius: 4rem; padding: 14px; width: auto; background: #009688; color: #FFF !important; border: none;">
                                        Book your strategy session today and activate data-driven resilience
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rtsd faq area end -->

        </div>

        <?php include "temp/footer.php" ?>

        <div class="modal fade" id="businessmax" tabindex="-1" aria-labelledby="businessmaxLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.5); align-content: center;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="businessFormModalLabel">BusinessAdvisor.Guru - Client Profiler</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body account-page-body">
                        <div class="form-step mian-wrapper-form active" id="directForm">
                            <div class="form-header">
                                <p class="text-muted" style="color: #FF9800 !important;">Please fill out this form to request advisory support. We'll respond within <b>24 hours</b>.</p>
                            </div>
                            
                            <input type="text" class="form-control" name="name" placeholder="Name*" id="formName" required/>
                            
                            <input type="text" class="form-control" name="firmName" placeholder="Firm Name*" id="formFirmName" required/>
                            
                            <input type="email" class="form-control" name="email" placeholder="Email Address*" id="formEmail" required/>
                            
                            <input type="tel" class="form-control" name="mobile" placeholder="Mobile Number*" id="formMobile" required/>
                            
                            <input type="text" class="form-control" name="website" placeholder="LinkedIn Profile or Website URL" id="formWebsite"/>
                            
                            <label for="formBusinessIssue" class="form-label">Elaborate the business issue for which you need this advisory support?*</label>
                            <textarea id="formBusinessIssue" name="businessIssue" rows="8" required></textarea>
                            
                            <div class="form-footer d-flex justify-content-end mt-4">
                                <button type="button" class="rts-btn btn-primary" id="submitBtn">Submit <i class="fas fa-paper-plane ms-2"></i></button>
                            </div>
                        </div>

                        <!-- Success Message (hidden by default) -->
                        <div class="form-step mian-wrapper-form text-center py-4" id="successMessage" style="display: none;">
                            <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                            <h3 class="mt-3">Thank You!</h3>
                            <p>We will respond within <b>24 hours</b> regarding your advisory support request.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Add event listener to the submit button
                document.getElementById('submitBtn').addEventListener('click', submitForm);
                
                // Also handle form submission when pressing Enter in any input field
                const formInputs = document.querySelectorAll('#directForm input, #directForm textarea');
                formInputs.forEach(input => {
                    input.addEventListener('keypress', function(e) {
                        if (e.key === 'Enter') {
                            e.preventDefault();
                            submitForm();
                        }
                    });
                });
            });

            function submitForm() {
                // Get form values using the correct IDs
                const name = document.getElementById("formName").value.trim();
                const firmName = document.getElementById("formFirmName").value.trim();
                const email = document.getElementById("formEmail").value.trim();
                const mobile = document.getElementById("formMobile").value.trim();
                const website = document.getElementById("formWebsite").value.trim();
                const businessIssue = document.getElementById("formBusinessIssue").value.trim();

                // Simple validation
                if (!name || !firmName || !email || !mobile || !businessIssue) {
                    alert("Please fill in all required fields marked with *");
                    return;
                }

                const message = `*Business Advisory - Profit Maximizer Support Request*\n\n` +
                    `*Contact Information*\n` +
                    `Name: ${name}\n` +
                    `Firm: ${firmName}\n` +
                    `Email: ${email}\n` +
                    `Mobile: ${mobile}\n` +
                    `LinkedIn/Website: ${website || 'Not provided'}\n\n` +
                    `*Business Issue*\n${businessIssue}`;

                const whatsappNumber = "919751825077";
                const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;
                window.open(whatsappURL, "_blank");

                // Show success message
                document.getElementById("directForm").style.display = "none";
                document.getElementById("successMessage").style.display = "block";

                // Close modal after 3 seconds
                setTimeout(() => {
                    const modal = bootstrap.Modal.getInstance(document.getElementById("businessin"));
                    if (modal) modal.hide();
                    
                    // Reset form for next use
                    document.getElementById("directForm").style.display = "block";
                    document.getElementById("successMessage").style.display = "none";
                    document.getElementById("formName").value = '';
                    document.getElementById("formFirmName").value = '';
                    document.getElementById("formEmail").value = '';
                    document.getElementById("formMobile").value = '';
                    document.getElementById("formWebsite").value = '';
                    document.getElementById("formBusinessIssue").value = '';
                }, 3000);
            }
        </script>

    </body>
</html>