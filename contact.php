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
        </style>

    </head>

    <body class="contact-page">
        <?php include "temp/header.php" ?>

        <div class="rts-breadcrumb-area bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" style="margin-top: 10rem;">
                        <div class="title-area-left center">
                            <span class="bg-title">Contact</span>
                            <h1 class="title rts-text-anime-style-1">
                                Contact Us
                            </h1>
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

        <!-- contact areas main -->
        <div class="rts-contact-area-in-page bg-white" data-animation="fadeInUp" data-delay="0.2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-info-area-wrapper-p new">
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fa-solid fa-phone-flip"></i>
                                </div>
                                <div class="info-wrapper">
                                    <span>Call Us</span>
                                    <a href="tel:9600765577">+91 960 076 5577</a>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fab fa-whatsapp" style="font-size: x-large; font-weight: bold;"></i>
                                </div>
                                <div class="info-wrapper">
                                    <span>Whatsapp</span>
                                    <a href="https://wa.me/+919751825077">+91 975 182 5077</a>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="info-wrapper">
                                    <span>Work with us</span>
                                    <a href="mailto:guru@businessadvisor.guru">guru@businessadvisor.guru</a>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="info-wrapper">
                                    <span>Our Location</span>
                                    <a href="https://maps.app.goo.gl/Ma3enyGYJXSYFbEi6">1st Floor Ganesh Mahal, Opp:Bata Showroom, DB Road, RS Puram, Coimbatore - 641002</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-p new">
                            <form class="form__content" method="post" action="https://html.themewant.com/invena/mailer.php" id="contact-form">
                                <h4 class="title">Get In Touch</h4>
                                <input name="name" id="name" type="text" placeholder="Your Name" />
                                <input type="email" name="email" id="email" placeholder="Example@gmail.com" />
                                <textarea name="message" id="message" placeholder="Message"></textarea>

                                <div id="form-messages"></div>
                                <button class="rts-btn btn-primary" type="submit">Get In Touch</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact areas main end -->

        <!-- map area start -->
        <div class="google-map-area rts-section-gapTop pb--120 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="google-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4829.663377855648!2d76.94863377950918!3d11.006233480157825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8599b9c801a59%3A0xc1b0e6959859e201!2sGuru%20Vignesh%20-%20Life%20Coach%20%7C%20Business%20Strategy%20Consultant%20%7C%20Motivational%20Speaker%20%7C%20Career%20Mentor%20%7C%20Industrial%20Entrepreneur!5e1!3m2!1sen!2sin!4v1750074930963!5m2!1sen!2sin"
                                width="600"
                                height="600"
                                style="border: 0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- map area end -->

        <?php include "temp/footer.php" ?>

    </body>
</html>