<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <?php include "temp/head.php" ?>
        
        <style>
            ul li div:hover {
                color: #3b9adb !important;
            }
            ul li div {
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

            <!--Gradient-->
            <div class="blob"></div>

            <section class="screen trans-group screen--scrollable is-in" id="landing">
                <div class="container">
                    <div class="screen__row">
                        <div>
                            <h2 class="screen__heading">
                                <span class="screen__heading-line trans-up-clip" data-letters="Guru Vignesh">Guru Vignesh</span>
                            </h2>
                            <div class="screen__content js-scrollbar" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px 0px 0px -40px;">
                                    <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 0px 0px 0px 40px;">
                                                    <div class="screen__content-inner">
                                                        <div class="screen__main-text trans-fade trans-delay-400">
                                                            <p class="text-white">I have over 18 years of experience in providing high performance coaching/ mentoring and consulting to entrepreneurs/ professionals and student communities across India/ Middle East and UK.</p>
                                                        </div>

                                                        <div class="s-expandable">
                                                            <div class="s-expandable--content">
                                                                <div class="screen__more-text">
                                                                    <ul>
                                                                        <li>We help implement right product strategy focused at delivering real customer value.</li>
                                                                        <li>We help drive calculated decisions connecting tech roadmap with time to market and budget.</li>
                                                                        <li>We bring the right partners solutions to enable added value services for your offering while reducing time to market.</li>
                                                                        <li>We advice on impact marketing and digital growth hacking.</li>
                                                                        <li>We enable a 360 degree success strategy implementation to ensure return on your innovation.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="width: 0px; display: none;"></div></div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="height: 0px; display: none;"></div></div>
                            </div>
                        </div>

                        <div class="screen__hex-grid">
                            <ul class="hex-grid hex-grid--cols-3 d:hex-grid--cols-5 hex-grid--rows-3">
                                <li class="hex-grid__item m:hex-grid__hidden d:hex-grid__r1-t d:hex-grid__c3">
                                    <div class="hex-grid__content hex-grid__content--even trans-hex-layer"></div>
                                </li>
                                <li class="hex-grid__item hex-grid__r1-b hex-grid__c1 d:hex-grid__r1-b d:hex-grid__c2 hex-grid__marker d:hex-grid__marker--lt">
                                    <a href="details-2.php" class="text-white hex-grid__content hex-grid__content--br trans-hex-layer trans-hex-layer-2">
                                        <div class="hex-grid__blur-bg"></div>
                                        Title 1
                                    </a>
                                </li>
                                <li class="hex-grid__item hex-grid__r1-b hex-grid__c3 d:hex-grid__r1-b d:hex-grid__c4 hex-grid__marker m:hex-grid__marker--t m:hex-grid__marker--dark d:hex-grid__marker--t d:hex-grid__marker--dark">
                                    <a href="details-2.php" class="text-white hex-grid__content hex-grid__content--tr trans-hex-layer trans-hex-layer-2">
                                        <div class="hex-grid__blur-bg"></div>
                                        Title 2
                                    </a>
                                </li>
                                <li class="hex-grid__item hex-grid__r1-t hex-grid__c2 d:hex-grid__r1-t d:hex-grid__c5 hex-grid__marker d:hex-grid__marker--rb">
                                    <a href="details-2.php" class="text-white hex-grid__content hex-grid__content--br trans-hex-layer">
                                        <div class="hex-grid__blur-bg"></div>
                                        Title 3
                                    </a>
                                </li>
                                <li class="hex-grid__item m:hex-grid__hidden d:hex-grid__r2-t d:hex-grid__c1">
                                    <div class="hex-grid__content hex-grid__content--lit trans-hex-layer trans-hex-layer-2"></div>
                                </li>
                                <li class="hex-grid__item hex-grid__item--center hex-grid__r2-t hex-grid__c2 d:hex-grid__r2-t d:hex-grid__c3 trans-fade">
                                    <div class="hex-grid__bg"></div>
                                    <a href="details-2.php" class="text-white hex-grid__content hex-grid__content--center">
                                        Title 4
                                    </a>
                                </li>
                                <li class="hex-grid__item hex-grid__r2-b hex-grid__c1 d:hex-grid__r2-b d:hex-grid__c2 hex-grid__marker m:hex-grid__marker--b m:hex-grid__marker--light d:hex-grid__marker--lb trans-hex-layer">
                                    <a href="details-2.php" class="text-white hex-grid__content hex-grid__content--tr trans-hex-layer trans-hex-layer-3">
                                        <div class="hex-grid__blur-bg"></div>
                                        Title 5
                                    </a>
                                </li>
                                <li class="hex-grid__item hex-grid__r2-b hex-grid__c3 d:hex-grid__r2-b d:hex-grid__c4">
                                    <div class="hex-grid__content hex-grid__content--lit trans-hex-layer trans-hex-layer-3"></div>
                                </li>
                                <li class="hex-grid__item hex-grid__r3-t hex-grid__c2 d:hex-grid__r3-t d:hex-grid__c3 hex-grid__marker d:hex-grid__marker--b">
                                    <a href="details-2.php" class="text-white hex-grid__content hex-grid__content--tr trans-hex-layer trans-hex-layer-4">
                                        <div class="hex-grid__blur-bg"></div>
                                        Click Here
                                    </a>
                                </li>
                            </ul>

                            <!-- <p class="screen__promo trans-fade trans-delay-400 text-white">Your program partner</p> -->
                            <!-- <a href="#landing-1" class="to-bottom-area">
                                <i class="fa-light fa-arrow-down"></i>
                                Scroll
                            </a> -->
                        </div>

                    </div>
                </div>
            </section>    
        </div>

        <?php include "temp/footer.php" ?>

        <script>
            var cursor = document.querySelector('.blob');

            document.addEventListener('mousemove', function(e){
                var x = e.clientX;
                var y = e.clientY;
                cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
            });
        </script>
    </body>
</html>