<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <?php include "temp/head.php" ?>
        
        <style>
            ul li a:hover {
                color: #3b9adb !important;
            }
            ul li a {
                color: #FFF !important;
            }

            /* Gradient CSS */
            .blob {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 650px;
                height: 650px;
                border-radius: 100%;
                background-image: linear-gradient(#3F51B5 10% 10%, #2196F3);
                filter: blur(250px);
                transition: all 450ms ease-out;
                position: fixed;
                pointer-events: none;
                left: 0;
                top: 0;
                transform: translate(calc(-50% + 15px), -50%);
                z-index: -1;
            }

            /* Random CSS for Demo */
            .content-parent {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 50%;
            }

            .content {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .content h1 {
                font-size: 3vw;
                text-align: center;
            }

            .content p {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                margin-top: 1rem;
                text-align: center;
            }

            .buttons {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 3rem;
            }

            .buttons a {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-decoration: none;
                color: #fff;
                padding: 10px 2rem;
                margin: 0px 6px;
                border-radius: 25px;
            }

            .buttons a:nth-child(1) {
                color: #121212;
                background-color: #ffffff;
                transition: all .3s ease;
            }

            .buttons a:nth-child(1):hover {
            background: #b7b7b7;
            color: #000;
            }

            .buttons a:nth-child(2) {
                border: 1px solid #fff;
                transition: all .3s ease;
            }

            .buttons a:nth-child(2):hover {
            background: #fff;
            color: #000;
            }

            @media only screen and (max-width: 700px) {
                .content-parent {
                    width: 90%;
                }

                .content h1 {
                    font-size: 2rem;
                }

                .buttons a {
                    padding: 6px 1rem;
                }
            }
        </style>
    </head>

    <body>
        <?php include "temp/header.php" ?>

        <div class="page-wrapper radious-none-button">
            <div class="banner-seven-swiper-wrapper">
                <!-- index seven area start -->
                <div class="index-seven-area rts-section-gap with-video bg_banner-seven two bg_image h-auto">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12" style="align-content: center;">
                                <div class="banner-seven-inner-content p-0">
                                    <span class="pre-title">
                                        <img src="assets/images/banner/icon/01.svg" alt="banner" />
                                        Business Coach
                                    </span>
                                    <h1 class="title py-2">
                                        Guru
                                        <span>vignesh</span>
                                    </h1>
                                    <p class="disc">
                                        Guru blends hands-on business experience, lean strategy, data-driven insights, AI-enabled innovation, and mindful coaching to help small businesses scale smarter, build stronger teams, and lead with confidence.
                                    </p>
                                    <a href="#" class="rts-btn btn-primary btn-white" style="border-radius: 15px;">For Enquiry</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12" style="place-items: center;">
                                <div class="screen screen--scrollable landing-screen trans-group is-in page--bg" id="landing">
                                    <div class="content-parent">
                                        <ul class="hex-grid hex-grid--cols-3 hex-grid--rows-3">
                                            <li class="hex-grid__item hex-grid__r1-b hex-grid__c1 hex-grid__marker d:hex-grid__marker--dark d:hex-grid__marker--lt">
                                                <a href="details-1.php" class="hex-grid__content hex-grid__content--interactive hex-grid__content--br trans-hex-layer trans-hex-layer-2">
                                                    <div class="hex-grid__blur-bg"></div>
                                                    Igniter
                                                </a>
                                            </li>
                                            <li class="hex-grid__item hex-grid__r1-t hex-grid__c2 hex-grid__marker d:hex-grid__marker--t">
                                                <a href="details-2.php" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer">
                                                    <div class="hex-grid__blur-bg"></div>
                                                    Accelerator
                                                </a>
                                            </li>
                                            <li class="hex-grid__item hex-grid__r1-b hex-grid__c3 hex-grid__marker d:hex-grid__marker--rt">
                                                <a href="details-3.php" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer trans-hex-layer-2">
                                                    <div class="hex-grid__blur-bg"></div>
                                                    Maximizer
                                                </a>
                                            </li>
                                            <li class="hex-grid__item hex-grid__r2-b hex-grid__c1 hex-grid__marker d:hex-grid__marker--lt">
                                                <a href="details-4.php" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer trans-hex-layer-3">
                                                    <div class="hex-grid__blur-bg"></div>
                                                    Comparator
                                                </a>
                                            </li>
                                            <li class="hex-grid__item hex-grid__item--center hex-grid__r2-t hex-grid__c2 trans-fade">
                                                <div class="hex-grid__content hex-grid__content--center">
                                                    <img src="assets/images/fav.png" alt="" />
                                                </div>
                                            </li>
                                            <li class="hex-grid__item hex-grid__r2-b hex-grid__c3 hex-grid__marker d:hex-grid__marker--dark d:hex-grid__marker--rt">
                                                <a href="details-5.php" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer trans-hex-layer-3">
                                                    <div class="hex-grid__blur-bg"></div>
                                                    Auditor
                                                </a>
                                            </li>
                                            <li class="hex-grid__item hex-grid__r3-t hex-grid__c2 hex-grid__marker d:hex-grid__marker--b">
                                                <a href="details-6.php" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer trans-hex-layer-4">
                                                    <div class="hex-grid__blur-bg"></div>
                                                    Automator
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-bg-video">
                        <video autoplay="" muted="" loop="" id="myVideo">
                            <source src="assets/images/banner/01.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
                <!-- index seven area end -->
            </div>

            <!--Gradient-->
            <!-- <div class="blob"></div> -->

            <!-- <section class="screen screen--scrollable landing-screen trans-group is-in page--bg" id="landing">
                <div class="content-parent">
                    <ul class="hex-grid hex-grid--cols-3 hex-grid--rows-3">
                        <li class="hex-grid__item hex-grid__r1-b hex-grid__c1 hex-grid__marker d:hex-grid__marker--dark d:hex-grid__marker--lt">
                            <a href="details.php" class="hex-grid__content hex-grid__content--interactive hex-grid__content--br trans-hex-layer trans-hex-layer-2">
                                <div class="hex-grid__blur-bg"></div>
                                Title 1
                            </a>
                        </li>
                        <li class="hex-grid__item hex-grid__r1-t hex-grid__c2 hex-grid__marker d:hex-grid__marker--t">
                            <a href="details.php" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer">
                                <div class="hex-grid__blur-bg"></div>
                                Title 2
                            </a>
                        </li>
                        <li class="hex-grid__item hex-grid__r1-b hex-grid__c3 hex-grid__marker d:hex-grid__marker--rt">
                            <a href="details.php" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer trans-hex-layer-2">
                                <div class="hex-grid__blur-bg"></div>
                                Title 3
                            </a>
                        </li>
                        <li class="hex-grid__item hex-grid__r2-b hex-grid__c1 hex-grid__marker d:hex-grid__marker--lt">
                            <a href="details.php" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer trans-hex-layer-3">
                                <div class="hex-grid__blur-bg"></div>
                                Title 4
                            </a>
                        </li>
                        <li class="hex-grid__item hex-grid__item--center hex-grid__r2-t hex-grid__c2 trans-fade">
                            <div class="hex-grid__content hex-grid__content--center">
                                <img src="assets/images/fav.png" alt="" />
                            </div>
                        </li>
                        <li class="hex-grid__item hex-grid__r2-b hex-grid__c3 hex-grid__marker d:hex-grid__marker--dark d:hex-grid__marker--rt">
                            <a href="details.php" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer trans-hex-layer-3">
                                <div class="hex-grid__blur-bg"></div>
                                Title 5
                            </a>
                        </li>
                        <li class="hex-grid__item hex-grid__r3-t hex-grid__c2 hex-grid__marker d:hex-grid__marker--b">
                            <a href="details.php" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer trans-hex-layer-4">
                                <div class="hex-grid__blur-bg"></div>
                                Title 6
                            </a>
                        </li>
                    </ul>
                </div>
            </section> -->
        </div>

        <?php include "temp/footer.php" ?>
    </body>
</html>