<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/logo-300.png') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colibrilab - development laboratory</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-grid.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/slick-theme.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/slick.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>


    <header class="front-page-header" id="home">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-logo">
                    <a class="local-anchor" href="#home">
                        <img src="<?= base_url('assets/images/logo-300.png') ?>" alt="logo">
                    </a>
                </div>
                <!-- Home about services team portfolio contact -->
                <button class="navbar-menu-toggler"><i class="fas fa-bars"></i></button>
                <ul class="navbar-menu">
                    <span class="hide-menu">X</span>
                    <li><a class="local-anchor" href="#home">Home</a></li>
                    <li><a class="local-anchor" href="#about-us">About</a></li>
                    <li><a class="local-anchor" href="#services">Services</a></li>
                    <li><a class="local-anchor" href="#team">Team</a></li>
                    <li><a class="local-anchor" href="#portfolio">Portfolio</a></li>
                    <li><a class="local-anchor" href="#contacts">Contacts</a></li>
                </ul>
            </div>
        </nav>

        <!-- Keyframes. DON'T TOUCH!!! -->
        <style id="keyframes">
            @keyframes allStaff {
                0% {
                    transform: translatex(0px);
                }

                100% {
                    transform: translateX(-1250px);
                }
            }
        </style>

        <!-- ////////////////// -->
        <div class="page-hero">
            <div class="container">
                <div class="row">
                    <div class="page-hero-image col-xl-8 col-lg-7 col-md-6 col-12">
                        <img class="animated fadeIn" id="hero-of-header" src="<?= base_url('assets/images/colibri_with_shadow.png') ?>"
                            alt="colibri">
                    </div>
                    <div class="page-hero-text col-xl-4 col-lg-5 col-md-6 col-12">
                        <div class="page-hero-text-container">
                            <h1>
                                <small>we are</small> Colibri Lab
                            </h1>

                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam corporis tempore quaerat
                                veniam voluptas aliquid.
                            </p>

                            <a href="#services" class="c-btn c-btn-outlined local-anchor">What we do? </a>
                            <a href="#contacts" class="c-btn c-btn-action local-anchor">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <img class="img-w-100 custom-hr" src="<?= base_url('assets/images/top-wave-hr.png') ?>" alt="vawe-hr">
    <section id="blue-section" class="bg-main-color">
        <div class="container">
            <div id="services" class="services">

                <div id="services-slider" class="services-slider animated">
                    <div class="services-slider-item">
                        <div class="services-slider-item-info">
                            <div class="services-slider-item-info-title">
                                <span class="services-slider-item-info-title-bold">WEB</span>
                                <span class="services-slider-item-info-title-thin">Development</span>
                            </div>

                            <p class="services-slider-item-descript">
                                We create an attractive, dynamic and functional site that exceeds your expectations and
                                meets your objectives.
                            </p>

                            <a href="#contacts" class="lnk lnk-contact-us local-anchor">Contact us</a>
                        </div>
                        <img class="services-slider-item-image" src="<?= base_url('assets/images/web-dev-bird.png') ?>"
                            alt="bird on web dev symbol" class="img-w-100">
                    </div>

                    <div class="services-slider-item">
                        <div class="services-slider-item-info">
                            <div class="services-slider-item-info-title">
                                <span class="services-slider-item-info-title-bold">WEB</span>
                                <span class="services-slider-item-info-title-thin">Design</span>
                            </div>

                            <p class="services-slider-item-descript">
                                We create superior interfaces to help you make meaningful connections with your
                                audience.
                            </p>

                            <a href="#contacts" class="lnk lnk-contact-us local-anchor">Contact us</a>
                        </div>
                        <img class="services-slider-item-image" src="<?= base_url('assets/images/web-design-bird.png') ?>"
                            alt="bird on web dev symbol" class="img-w-100">
                    </div>

                    <div class="services-slider-item">
                        <div class="services-slider-item-info">
                            <div class="services-slider-item-info-title">
                                <span class="services-slider-item-info-title-bold">ECOMMERCE</span>
                            </div>

                            <p class="services-slider-item-descript">
                                We just don't build an Ecommerce site for you, we build concept! We align our experience
                                of building significant .
                            </p>

                            <a href="#contacts" class="lnk lnk-contact-us local-anchor">Contact us</a>
                        </div>
                        <img class="services-slider-item-image" src="<?= base_url('assets/images/web-commerce-bird.png') ?>"
                            alt="bird on web dev symbol" class="img-w-100">
                    </div>

                    <div class="services-slider-item">
                        <div class="services-slider-item-info">
                            <div class="services-slider-item-info-title">
                                <span class="services-slider-item-info-title-bold">Courses</span>
                                <span class="services-slider-item-info-title-thin">And Trainings</span>
                            </div>

                            <p class="services-slider-item-descript">
                                Whether you want to start a new career or to advance in your field our development
                                courses are designed to meet your interests .
                            </p>

                            <a href="#contacts" class="lnk lnk-contact-us local-anchor">Contact us</a>
                        </div>
                        <img class="services-slider-item-image" src="<?= base_url('assets/images/web-courses-bird.png') ?>"
                            alt="bird on web dev symbol" class="img-w-100">
                    </div>

                    <div class="services-slider-item">
                        <div class="services-slider-item-info">
                            <div class="services-slider-item-info-title">
                                <span class="services-slider-item-info-title-bold">QA TESTING</span>
                            </div>

                            <p class="services-slider-item-descript">
                                We create an attractive, dynamic and functional site that exceeds your expectations and
                                meets your objectives.
                            </p>

                            <a href="#contacts" class="lnk lnk-contact-us local-anchor">Contact us</a>
                        </div>
                        <img class="services-slider-item-image" src="<?= base_url('assets/images/web-dev-bird.png') ?>"
                            alt="bird on web dev symbol" class="img-w-100">
                    </div>

                    <div class="services-slider-item">
                        <div class="services-slider-item-info">
                            <div class="services-slider-item-info-title">
                                <span class="services-slider-item-info-title-bold">SEO</span>
                                <span class="services-slider-item-info-title-thin">advancement</span>
                            </div>

                            <p class="services-slider-item-descript">
                                We create an attractive, dynamic and functional site that exceeds your expectations and
                                meets your objectives.
                            </p>

                            <a href="#contacts" class="lnk lnk-contact-us local-anchor">Contact us</a>
                        </div>
                        <img class="services-slider-item-image" src="<?= base_url('assets/images/web-dev-bird.png') ?>"
                            alt="bird on web dev symbol" class="img-w-100">
                    </div>

                </div>
            </div>
        </div>
        <!-- <img class="dotted-line-wrap" src="images/dotted line1.png" alt="dotted-line"> -->
        <div class="container">
            <div id="about-us" class="about-us">
                <div class="about-us-title animated">
                    <h2>Who We Are</h2>
                    <p>Creating amazing things with love</p>
                </div>
            </div>
        </div>
        <img style="position: absolute; z-index: 0; " class="img-w-100" src="<?= base_url('assets/images/dotted line2.png') ?>" alt="dotted-line">
        <div class="container about-us-part-2-container">
            <div class="about-us about-us-part-2">
                <div class="about-us-content">
                    <div class="about-us-content-text animated">
                        <p>
                            Founded in 2012 in Yerevan, Armenia, ColibriLab was formed to provide professional web-based
                            services, ranging from custom web designs to fully functional dynamic rich websites.
                        </p>

                        <p>
                            Providing the ability to integrate clear, functional, and creative interfaces with
                            technical, business solutions, ColibriLab was launched to strategically help build your
                            brand, improve our global web presence, and develop more meaningful relationships
                            with your customers.
                        </p>

                        <p>
                            Our philosophy centers on the high-end design and the latest technologies. Over the past
                            three years, we have worked with many clients, understanding their needs and providing
                            custom solutions in the form of corporate (small to enterprise) websites and
                            web applications.
                        </p>

                        <p>
                            Each of our employees dedicates themselves to finding what makes your potential clients want
                            to interact with your website. We aim to create a meeting point where web professionals come
                            to find inspiration; a space for debate; a place to share knowledge
                            and experience; give and receive constructive and respectful critiques.
                        </p>

                        <a href="#contacts" class="lnk lnk-contact-us local-anchor">Contact us</a>
                    </div>
                    <div class="about-us-content-images">
                        <div class="about-us-content-images-back animated">
                            <img class="img-w-100" src="<?= base_url('assets/images/team.png') ?>" alt="colibrilabteam">
                            <div class="bg-overlay"></div>
                        </div>
                        <div class="about-us-content-images-front animated">
                            <img class="img-w-100" src="<?= base_url('assets/images/team.png') ?>" alt="colibrilabteam">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img style="position: absolute; z-index: 0; " class="dotted-line-wrap-short" src="<?= base_url('assets/images/dotted line3.png') ?>"
            alt="dotted-line">
    </section>
    <img class="img-w-100 custom-hr hide-mobile" src="<?= base_url('assets/images/bottom-wave-hr.png') ?>" alt="vawe-hr">

    <section id="team" class="team animated">
        <div class="container">
            <div class="flex-row">
                <div class="team-member">
                    <div class="team-member-image" style="background-image: url('<?= base_url('assets/images/Sargis.png') ?>');"></div>
                    <div class="team-member-info">
                        <div class="team-member-info-name">
                            <h3>Sargis Torosyan</h3>
                            <p class="team-member-info-position">
                                &lt; Senior Developer &gt;
                            </p>
                        </div>


                        <p class="team-member-info-descript">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
                        </p>

                        <div class="social-buttons">
                            <div class="social-buttons-item">
                                <i class="fab fa-facebook-f"></i>
                            </div>

                            <div class="social-buttons-item">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-member-image" style="background-image: url('<?= base_url('assets/images/Ani.png') ?>');"></div>
                    <div class="team-member-info">
                        <div class="team-member-info-name">
                            <h3>Ani Harutyunyan</h3>
                            <p class="team-member-info-position">
                                &lt; Manager &gt;
                            </p>
                        </div>


                        <p class="team-member-info-descript">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
                        </p>

                        <div class="social-buttons">
                            <div class="social-buttons-item">
                                <i class="fab fa-facebook-f"></i>
                            </div>

                            <div class="social-buttons-item">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-member-image" style="background-image: url('<?= base_url('assets/images/Lusine.png') ?>');"></div>
                    <div class="team-member-info">
                        <div class="team-member-info-name">
                            <h3>Lusine Stepanyan</h3>
                            <p class="team-member-info-position">
                                &lt; QA enginer &gt;
                            </p>
                        </div>


                        <p class="team-member-info-descript">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
                        </p>

                        <div class="social-buttons">
                            <div class="social-buttons-item">
                                <i class="fab fa-facebook-f"></i>
                            </div>

                            <div class="social-buttons-item">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-row">
                <div class="team-member">
                    <div class="team-member-image" style="background-image: url('<?= base_url('assets/images/Sargis.png') ?>');"></div>
                    <div class="team-member-info">
                        <div class="team-member-info-name">
                            <h3>Sargis Torosyan</h3>
                            <p class="team-member-info-position">
                                &lt; Senior Developer &gt;
                            </p>
                        </div>


                        <p class="team-member-info-descript">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
                        </p>

                        <div class="social-buttons">
                            <div class="social-buttons-item">
                                <i class="fab fa-facebook-f"></i>
                            </div>

                            <div class="social-buttons-item">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-member-image" style="background-image: url('<?= base_url('assets/images/Ani.png') ?>');"></div>
                    <div class="team-member-info">
                        <div class="team-member-info-name">
                            <h3>Ani Harutyunyan</h3>
                            <p class="team-member-info-position">
                                &lt; Manager &gt;
                            </p>
                        </div>


                        <p class="team-member-info-descript">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
                        </p>

                        <div class="social-buttons">
                            <div class="social-buttons-item">
                                <i class="fab fa-facebook-f"></i>
                            </div>

                            <div class="social-buttons-item">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-member-image" style="background-image: url('<?= base_url('assets/images/Lusine.png') ?>');"></div>
                    <div class="team-member-info">
                        <div class="team-member-info-name">
                            <h3>Lusine Stepanyan</h3>
                            <p class="team-member-info-position">
                                &lt; QA enginer &gt;
                            </p>
                        </div>


                        <p class="team-member-info-descript">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
                        </p>

                        <div class="social-buttons">
                            <div class="social-buttons-item">
                                <i class="fab fa-facebook-f"></i>
                            </div>

                            <div class="social-buttons-item">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0);" data-modal="members" class="c-btn c-btn-action c-btn-more modal-show">See all
                team members</a>
        </div>
    </section>

    <div class="all-staff">
        <div class="all-staff-slider">
            <img src="<?= base_url('assets/images/all-staff/Andranik.png') ?>" alt="Andranik">
            <img src="<?= base_url('assets/images/all-staff/Ani.png') ?>" alt="Ani">
            <img src="<?= base_url('assets/images/all-staff/Arthur.png') ?>" alt="Arthur">
            <img src="<?= base_url('assets/images/all-staff/Lusine.png') ?>" alt="Lusine.png">
            <img src="<?= base_url('assets/images/all-staff/Mane.png') ?>" alt="Mane.png">
        </div>
        <div class="bg-overlay">
            <h1>Our big <span>staff</span></h1>

            <p style="width: 60%">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Harum ratione ex fuga laboriosam debitis dignissimos dolorem officia! Modi omnis porro accusantium sint
                dolorem? Quo.
            </p>

            <a href="javascript:void(0);" data-modal="members" class="c-btn c-btn-action c-btn-more modal-show">See all
                team members</a>
        </div>
    </div>
    <img class="img-w-100 custom-hr hide-mobile" src="<?= base_url('assets/images/bottom-wave-hr-white.png') ?>" alt="custom hr">

    <section id="portfolio" class="portfolio animated">
        <div class="container">
            <div class="portfolio-title">
                <div class="paralax-text">
                    <span class="paralax-text-back">OUR</span>
                    <span class="paralax-text-front">PORTFOLIO</span>
                </div>
            </div>

            <div class="row">
                <p class="offset-md-2 col-md-8 portfolio-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repudiandae odio vel! Ducimus
                    adipisci, quaerat maxime magni, praesentium ipsa, fugit illum magnam rem impedit nostrum?
                </p>
            </div>

            <div class="portfolio-items">
                <a href="#" class="portfolio-items-item">
                    <img class="img-w-100" src="<?= base_url('assets/images/portfolio1.png') ?>" alt="portfolio-image">
                </a>
                <a href="#" class="portfolio-items-item">
                    <img class="img-w-100" src="<?= base_url('assets/images/portfolio2.png') ?>" alt="portfolio-image">
                </a>
                <a href="#" class="portfolio-items-item">
                    <img class="img-w-100" src="<?= base_url('assets/images/portfolio3.png') ?>" alt="portfolio-image">
                </a>
                <a href="#" class="portfolio-items-item">
                    <img class="img-w-100" src="<?= base_url('assets/images/portfolio4.png') ?>" alt="portfolio-image">
                </a>
                <a href="javascript:void(0);" data-modal="projects" class="c-btn c-btn-action c-btn-more modal-show">See
                    all projects</a>
            </div>
        </div>
    </section>

    <section id="contacts">
        <img src="<?= base_url('assets/images/bottom-wave-hr-white-2.png') ?>" class="img-w-100 custom-hr" alt="custom-hr">
        <div class="bg-overlay"></div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3049.030758380022!2d44.511031315643166!3d40.16386887890261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abc67bba0d8a1%3A0x6ba5de0299af1d0d!2s49+Tigran+Mets+Ave%2C+Yerevan%2C+Armenia!5e0!3m2!1sen!2s!4v1565940231595!5m2!1sen!2s"
            frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="container contact-form-container">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-form animated">
                        <img class="contact-form-logo" src="<?= base_url('assets/images/logo-dark.png') ?>" alt="logo-dark">
                        <input class="contact-form-name" type="text" placeholder="Your name*" required>
                        <input class="contact-form-mail" type="mail" placeholder="Your e-mail*" required>
                        <textarea class="contact-form-message" id="message" placeholder="Message*"></textarea>
                        <button class="contact-form-send c-btn c-btn-action">Send</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-dark-line"></div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-1">
                    <div class="footer-main-info">
                        <h2>ColibriLab</h2>
                        <p>Development laboratory</p>

                        <div class="social-buttons">
                            <div class="social-buttons-item">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="social-buttons-item">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="social-buttons-item">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="social-buttons-item">
                                <i class="fab fa-linkedin-in"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <ul class="footer-menu">
                        <li><a class="local-anchor" href="#home">Home</a></li>
                        <li><a class="local-anchor" href="#about-us">About</a></li>
                        <li><a class="local-anchor" href="#services">Services</a></li>
                        <li><a class="local-anchor" href="#team">Team</a></li>
                        <li><a class="local-anchor" href="#portfolio">Portfolio</a></li>
                        <li><a class="local-anchor" href="#contacts">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="footer-contacts">
                        <p><span class="color-main">Tel:</span> +374 10 573926</p>
                        <p><span class="color-main">E-mail:</span> info@colibrilab.net</p>
                        <p><span class="color-main">Working hours:</span> 09:00 AM - 06:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="cmodal-bg">
        <div class="cmodal">
            <div class="container">
                <span class="cmodal-close">X</span>
                <div class="cmodal-title">
                    <h1>Our Staff</h1>
                    <div class="cmodal-title-hr"></div>
                    <p>Our big family</p>
                </div>

                <div class="cmodal-content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ipsam velit eaque facilis debitis explicabo! Possimus aspernatur sunt quos consequuntur,
                        perferendis illum eveniet reiciendis? Quod, soluta.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ipsam velit eaque facilis debitis explicabo! Possimus aspernatur sunt quos consequuntur,
                        perferendis illum eveniet reiciendis? Quod, soluta.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ipsam velit eaque facilis debitis explicabo! Possimus aspernatur sunt quos consequuntur,
                        perferendis illum eveniet reiciendis? Quod, soluta.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/slick.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>

</html>