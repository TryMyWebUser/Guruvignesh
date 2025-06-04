<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Search Engine Optimization by Rank Math - https://rankmath.com/ -->
        <title>HypeFin — Services Spectrum</title>

        <link rel="stylesheet" id="app.css-css" href="app.css" type="text/css" media="all" />
    </head>

    <body>
        <section class="screen screen--scrollable landing-screen trans-group is-in" id="landing">
            <ul class="hex-grid hex-grid--cols-3 hex-grid--rows-3">
                <li class="hex-grid__item hex-grid__r1-b hex-grid__c1 hex-grid__marker d:hex-grid__marker--dark d:hex-grid__marker--lt">
                    <a href="#growth" class="hex-grid__content hex-grid__content--interactive hex-grid__content--br trans-hex-layer trans-hex-layer-2">
                        <div class="hex-grid__blur-bg"></div>
                        Growth
                    </a>
                </li>
                <li class="hex-grid__item hex-grid__r1-t hex-grid__c2 hex-grid__marker d:hex-grid__marker--t">
                    <a href="#engage" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer">
                        <div class="hex-grid__blur-bg"></div>
                        Engage
                    </a>
                </li>
                <li class="hex-grid__item hex-grid__r1-b hex-grid__c3 hex-grid__marker d:hex-grid__marker--rt">
                    <a href="#comply" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer trans-hex-layer-2">
                        <div class="hex-grid__blur-bg"></div>
                        Comply
                    </a>
                </li>
                <li class="hex-grid__item hex-grid__r2-b hex-grid__c1 hex-grid__marker d:hex-grid__marker--lt">
                    <a href="#deliver" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer trans-hex-layer-3">
                        <div class="hex-grid__blur-bg"></div>
                        Deliver
                    </a>
                </li>
                <li class="hex-grid__item hex-grid__item--center hex-grid__r2-t hex-grid__c2 trans-fade">
                    <div class="hex-grid__bg"></div>
                    <div class="hex-grid__content hex-grid__content--center">
                        <img src="logo-bw.svg" alt="" />
                    </div>
                </li>
                <li class="hex-grid__item hex-grid__r2-b hex-grid__c3 hex-grid__marker d:hex-grid__marker--dark d:hex-grid__marker--rt">
                    <a href="#strategise" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer trans-hex-layer-3">
                        <div class="hex-grid__blur-bg"></div>
                        Strategise
                    </a>
                </li>
                <li class="hex-grid__item hex-grid__r3-t hex-grid__c2 hex-grid__marker d:hex-grid__marker--b">
                    <a href="#enhance" class="hex-grid__content hex-grid__content--interactive hex-grid__content--tr trans-hex-layer trans-hex-layer-4">
                        <div class="hex-grid__blur-bg"></div>
                        Enhance
                    </a>
                </li>
            </ul>
        </section>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
            content="Invena – A modern and responsive HTML template for consulting businesses. Perfect for finance, corporate, and agency websites. SEO-friendly, fast-loading, and easy to customize. Create a professional online presence today!"
        />
        
        <?php include "temp/head.php" ?>
        
        <style>
            ol, ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            .hexagon-container {
                position: relative;
                width: 300px;
                height: 260px;
                margin: 0 auto;
            }

            .hexagon {
                position: absolute;
                width: 180px;
                height: 110.74px;
                background-color: #e5e7eb;
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border: 1px solid transparent;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-weight: bold;
                text-transform: uppercase;
                font-size: 12px;
                box-shadow: 0 4px 15px transparent;
                transition: all 0.3s ease;
                cursor: pointer;
            }
            
            .hexagon:hover {
                transform: scale(1.1);
                background-color: rgba(85, 108, 130, 0.7);
                z-index: 10;
            }
            
            .hexagon:before, .hexagon:after {
                content: "";
                position: absolute;
                width: 0;
                border-left: 90px solid transparent;
                border-right: 90px solid transparent;
            }
            
            .hexagon:before {
                bottom: 100%;
                border-bottom: 28.87px solid transparent;
                border-bottom-color: inherit;
            }
            
            .hexagon:after {
                top: 100%;
                border-top: 28.87px solid transparent;
                border-top-color: inherit;
            }

            /* Hexagon positions */
            .hexagon.hex_1 { /* Top */
                top: 0;
                left: 143px;
            }
            
            .hexagon.hex_2 { /* Top-right */
                top: 145px;
                left: 240px;
            }
            
            .hexagon.hex_3 { /* Bottom-right */
                top: 290px;
                left: 143px;
            }
            
            .hexagon.hex_4 { /* Bottom */
                top: 290px;
                left: -53px;
            }
            
            .hexagon.hex_5 { /* Bottom-left */
                top: 145px;
                left: -150px;
            }
            
            .hexagon.hex_6 { /* Top-left */
                top: 0;
                left: -53px;
            }
            
            .hexagon.hex_7 { /* Center */
                top: 145px;
                left: 45px;
            }

            /* Gradient CSS */
            .blob {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 650px;
                height: 650px;
                border-radius: 100%;
                background-image: linear-gradient(#1100ff 10%, #ff00f2);
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
                <div class="index-seven-area rts-section-gap with-video bg_banner-seven two bg_image">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-seven-inner-content">
                                    <span class="pre-title">
                                        <img src="assets/images/banner/icon/01.svg" alt="banner" />
                                        Business Success Starts Here
                                    </span>
                                    <h1 class="title">
                                        Business <br />
                                        <span>Growth</span>
                                    </h1>
                                    <p class="disc">
                                        Maecenas quis integer aenean nisl, viverra morbi magna amet, viverra. Sollicitudin posuere scelerisque urna, urna. At vestibulum fringilla.
                                    </p>
                                    <a href="service.html" class="rts-btn btn-primary btn-white">View Services</a>
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

                <div class="email-area-left">
                    <i class="fa-regular fa-envelope"></i>
                    <a href="#">info@invema.com</a>
                </div>

                <div class="language-area">
                    <span>en.</span>
                    <span>fr.</span>
                    <span>ge.</span>
                </div>

                <a href="#" class="to-bottom-area">
                    <i class="fa-light fa-arrow-up"></i>
                    Scroll
                </a>
            </div>

            <!--Gradient-->
            <div class="blob"></div>

            <!-- rts about us area start -->
            <div class="rts-about-area-6 rts-section-gap" style="height: 100vh;">
                <div class="container pb--40">
                    <ul class="hexagon-container content-parent">
                        <li class="hexagon hex_1">Engage</li>
                        <li class="hexagon hex_2">Growth</li>
                        <li class="hexagon hex_3">Comply</li>
                        <li class="hexagon hex_4">Deliver</li>
                        <li class="hexagon hex_5">Strategise</li>
                        <li class="hexagon hex_6">Enhance</li>
                        <li class="hexagon hex_7">
                            <img src="assets/images/fav.png" alt="Logo" style="width: 40px; height: 40px;" />
                        </li>
                    </ul>
                </div>
            </div>

            

            <!--Random CSS for Demo-->
            <!-- <div class="container">
                <div class="content-parent">
                    <div class="content">
                        <h1>Reimagine a whole new world of endless opportunities.</h1>
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <div class="buttons">
                        <a href="#" class="left">Learn more</a>
                        <a href="#" class="right">Skip</a>
                    </div>
                </div>
            </div> -->
            <!-- rts about us area end -->
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