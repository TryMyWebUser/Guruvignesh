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

            <!-- <section class="screen screen--scrollable landing-screen trans-group is-in page--bg" id="landing">
            </section> -->
            <section class="screen trans-group screen--scrollable is-in overflow-auto" id="landing" style="height: 100vh;">
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

                                                        <!-- <button class="screen__more-btn trans-fade trans-delay-400">
                                                            <span class="screen__more-btn-text" data-collapse-text="Collapse info">See more info</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none">
                                                                <path d="M1 1.25L4.75 5 1 8.75" stroke="#fff"></path>
                                                            </svg>
                                                        </button>

                                                        <div class="screen__desktop-buttons trans-fade trans-delay-400">
                                                            <a href="#connect" type="button" class="button js-connect-button">Connect</a>
                                                            <a href="#download" type="button" class="button button--orange js-download-button">
                                                                Download
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                                                                    <path
                                                                        d="M19.886 5.954L14.479.13a.402.402 0 00-.294-.13h-8.06C5.224 0 4.49.76 4.49 1.695v5.92H1.224C.549 7.615 0 8.185 0 8.884v6.348c0 .7.549 1.268 1.224 1.268H4.49v3.808c0 .933.734 1.692 1.635 1.692h12.24c.901 0 1.635-.759 1.635-1.69V6.246c0-.11-.04-.215-.114-.293zm-5.6-4.812l4.439 4.781h-4.44v-4.78zM1.224 15.654a.415.415 0 01-.408-.422V8.884c0-.233.183-.422.408-.422h11.022c.224 0 .407.189.407.422v6.348a.415.415 0 01-.407.422H1.224zm17.96 4.655a.833.833 0 01-.82.845H6.125a.834.834 0 01-.819-.846V16.5h6.94c.674 0 1.223-.569 1.223-1.268V8.884c0-.7-.549-1.269-1.223-1.269h-6.94v-5.92c0-.468.368-.849.82-.849h7.343v5.5c0 .234.183.423.409.423h5.306v13.54z"
                                                                        fill="#FF4B00"
                                                                    ></path>
                                                                    <path
                                                                        d="M4.88 10.738a.919.919 0 00-.505-.356c-.13-.037-.411-.055-.842-.055H2.397v3.634h.708v-1.37h.462c.32 0 .565-.018.734-.052a1.009 1.009 0 00.665-.53 1.23 1.23 0 00.117-.564c0-.289-.068-.525-.203-.707zm-.607 1a.467.467 0 01-.22.178c-.095.038-.281.057-.56.057h-.388v-1.03h.342c.255 0 .425.007.51.024a.48.48 0 01.284.161.48.48 0 01.112.327.501.501 0 01-.08.283zm4.213-.418a1.602 1.602 0 00-.335-.589 1.166 1.166 0 00-.528-.334c-.153-.046-.376-.07-.667-.07H5.662v3.634h1.332c.261 0 .47-.025.626-.076.21-.07.375-.166.498-.29.162-.164.288-.378.375-.642.072-.217.108-.475.108-.774 0-.34-.038-.627-.115-.859zm-.689 1.493c-.047.162-.11.28-.185.35a.645.645 0 01-.286.152 1.86 1.86 0 01-.428.034H6.37v-2.407h.318c.288 0 .482.012.58.035.133.03.242.087.328.17a.839.839 0 01.201.353c.048.15.072.366.072.647 0 .28-.024.503-.072.666zm3.813-1.871v-.615H9.206v3.634h.708v-1.544h1.464v-.615H9.914v-.86h1.696z"
                                                                        fill="#FF4B00"
                                                                    ></path>
                                                                </svg>
                                                            </a>
                                                        </div> -->
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
                                    <div class="hex-grid__content hex-grid__content--br trans-hex-layer trans-hex-layer-2">
                                        <div class="hex-grid__blur-bg"></div>
                                        Title 1
                                    </div>
                                </li>
                                <li class="hex-grid__item hex-grid__r1-b hex-grid__c3 d:hex-grid__r1-b d:hex-grid__c4 hex-grid__marker m:hex-grid__marker--t m:hex-grid__marker--dark d:hex-grid__marker--t d:hex-grid__marker--dark">
                                    <div class="hex-grid__content hex-grid__content--tr trans-hex-layer trans-hex-layer-2">
                                        <div class="hex-grid__blur-bg"></div>
                                        Title 2
                                    </div>
                                </li>
                                <li class="hex-grid__item hex-grid__r1-t hex-grid__c2 d:hex-grid__r1-t d:hex-grid__c5 hex-grid__marker d:hex-grid__marker--rb">
                                    <div class="hex-grid__content hex-grid__content--br trans-hex-layer">
                                        <div class="hex-grid__blur-bg"></div>
                                        Title 3
                                    </div>
                                </li>
                                <li class="hex-grid__item m:hex-grid__hidden d:hex-grid__r2-t d:hex-grid__c1">
                                    <div class="hex-grid__content hex-grid__content--lit trans-hex-layer trans-hex-layer-2"></div>
                                </li>
                                <li class="hex-grid__item hex-grid__item--center hex-grid__r2-t hex-grid__c2 d:hex-grid__r2-t d:hex-grid__c3 trans-fade">
                                    <div class="hex-grid__bg"></div>
                                    <div class="hex-grid__content hex-grid__content--center">
                                        Title 4
                                    </div>
                                </li>
                                <li class="hex-grid__item hex-grid__r2-b hex-grid__c1 d:hex-grid__r2-b d:hex-grid__c2 hex-grid__marker m:hex-grid__marker--b m:hex-grid__marker--light d:hex-grid__marker--lb trans-hex-layer">
                                    <div class="hex-grid__content hex-grid__content--tr trans-hex-layer trans-hex-layer-3">
                                        <div class="hex-grid__blur-bg"></div>
                                        Title 5
                                    </div>
                                </li>
                                <li class="hex-grid__item hex-grid__r2-b hex-grid__c3 d:hex-grid__r2-b d:hex-grid__c4">
                                    <div class="hex-grid__content hex-grid__content--lit trans-hex-layer trans-hex-layer-3"></div>
                                </li>
                                <li class="hex-grid__item hex-grid__r3-t hex-grid__c2 d:hex-grid__r3-t d:hex-grid__c3 hex-grid__marker d:hex-grid__marker--b">
                                    <div class="hex-grid__content hex-grid__content--tr trans-hex-layer trans-hex-layer-4">
                                        <div class="hex-grid__blur-bg"></div>
                                        Title 6
                                    </div>
                                </li>
                            </ul>

                            <p class="screen__promo trans-fade trans-delay-400 text-white">Your program partner</p>
                        </div>

                        <!-- <div class="screen__mobile-buttons">
                            <a href="#connect" type="button" class="button js-connect-button">Connect</a>
                            <a href="#download" type="button" class="button button--orange js-download-button">
                                Download
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                                    <path
                                        d="M19.886 5.954L14.479.13a.402.402 0 00-.294-.13h-8.06C5.224 0 4.49.76 4.49 1.695v5.92H1.224C.549 7.615 0 8.185 0 8.884v6.348c0 .7.549 1.268 1.224 1.268H4.49v3.808c0 .933.734 1.692 1.635 1.692h12.24c.901 0 1.635-.759 1.635-1.69V6.246c0-.11-.04-.215-.114-.293zm-5.6-4.812l4.439 4.781h-4.44v-4.78zM1.224 15.654a.415.415 0 01-.408-.422V8.884c0-.233.183-.422.408-.422h11.022c.224 0 .407.189.407.422v6.348a.415.415 0 01-.407.422H1.224zm17.96 4.655a.833.833 0 01-.82.845H6.125a.834.834 0 01-.819-.846V16.5h6.94c.674 0 1.223-.569 1.223-1.268V8.884c0-.7-.549-1.269-1.223-1.269h-6.94v-5.92c0-.468.368-.849.82-.849h7.343v5.5c0 .234.183.423.409.423h5.306v13.54z"
                                        fill="#FF4B00"
                                    ></path>
                                    <path
                                        d="M4.88 10.738a.919.919 0 00-.505-.356c-.13-.037-.411-.055-.842-.055H2.397v3.634h.708v-1.37h.462c.32 0 .565-.018.734-.052a1.009 1.009 0 00.665-.53 1.23 1.23 0 00.117-.564c0-.289-.068-.525-.203-.707zm-.607 1a.467.467 0 01-.22.178c-.095.038-.281.057-.56.057h-.388v-1.03h.342c.255 0 .425.007.51.024a.48.48 0 01.284.161.48.48 0 01.112.327.501.501 0 01-.08.283zm4.213-.418a1.602 1.602 0 00-.335-.589 1.166 1.166 0 00-.528-.334c-.153-.046-.376-.07-.667-.07H5.662v3.634h1.332c.261 0 .47-.025.626-.076.21-.07.375-.166.498-.29.162-.164.288-.378.375-.642.072-.217.108-.475.108-.774 0-.34-.038-.627-.115-.859zm-.689 1.493c-.047.162-.11.28-.185.35a.645.645 0 01-.286.152 1.86 1.86 0 01-.428.034H6.37v-2.407h.318c.288 0 .482.012.58.035.133.03.242.087.328.17a.839.839 0 01.201.353c.048.15.072.366.072.647 0 .28-.024.503-.072.666zm3.813-1.871v-.615H9.206v3.634h.708v-1.544h1.464v-.615H9.914v-.86h1.696z"
                                        fill="#FF4B00"
                                    ></path>
                                </svg>
                            </a>
                        </div> -->
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