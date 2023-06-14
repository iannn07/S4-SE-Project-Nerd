<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Nerd.</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('Admin Assets/Landing/assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('Admin Assets/Landing/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Admin Assets/Landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin Assets/Landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin Assets/Landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin Assets/Landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin Assets/Landing/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin Assets/Landing/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Admin Assets/Landing/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Jun 04 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('landing') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('Admin Assets/Landing/assets/img/logo.png') }}" alt="">
                <span>Nerd.</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" onclick="openNewTab(event)" href="{{ route('login') }}">Get
                            Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">We offer modern solutions to improve your study section!</h1>
                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>About Us</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ 'Admin Assets/Landing/assets/img/hero-img.png' }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Who We Are</h3>
                            <h2>We are from fourth semester students in Software Engineering Course on LA20 as BINUSIAN
                                25. All of us loved to study, trust me :)</h2>
                            <p>
                                We're going on a trip get ready for this<br>
                                Zooming through the sky, Little Einsteins<br>
                                Climb aboard, get ready to explore<br>
                                There's so much to find, Little Einsteins<br>
                                We're going on a mission, start the countdown<br>
                                5! 4! 3! 2! 1!
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ 'Admin Assets/Landing/assets/img/about.jpg' }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Our Values</h2>
                    <p>The benefits of using Nerd.</p>
                </header>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="{{ 'Admin Assets/Landing/assets/img/values-1.png' }}" class="img-fluid"
                                alt="">
                            <h3>Increased productivity</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="{{ 'Admin Assets/Landing/assets/img/values-2.png' }}" class="img-fluid"
                                alt="">
                            <h3>Expands your connection</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box">
                            <img src="{{ 'Admin Assets/Landing/assets/img/values-3.png' }}" class="img-fluid"
                                alt="">
                            <h3>Help you to focus</h3>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-headset" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Hours Of Support</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-people" style="color: #bb0852;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Hard Workers</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Features</h2>
                    <p>We proposed several features inside of Nerd</p>
                </header>

                <div class="row">

                    <div class="col-lg-6">
                        <img src="{{ 'Admin Assets/Landing/assets/img/features.png' }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Socialize</h3>
                                </div>
                            </div>

                            <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>There's no limit to the storage</h3>
                                </div>
                            </div>

                            <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Summarize your notes using AI</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- / row -->
            </div>
        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Services</h2>
                    <p>Learning methodologies</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Pomodoro</h3>
                            <p>Improvising your time-management.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Feynman</h3>
                            <p>Teach yourself by summarizing what you write.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>Leitner-Anki</h3>
                            <p>Create a flashcard to improve your memory of a topic.</p>
                            <a href="#" class="read-more"><span>Read More</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Pricing</h2>
                    <p>Check our Pricing</p>
                </header>

                <div class="row gy-4" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <h3 style="color: #07d5c0;">Free Plan</h3>
                            <div class="price"><sup>$</sup>0<span> / mo</span></div>
                            <img src="{{ 'Admin Assets/Landing/assets/img/pricing-free.png' }}" class="img-fluid"
                                alt="">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <span class="featured">Featured</span>
                            <h3 style="color: #65c600;">Starter Plan</h3>
                            <div class="price"><sup>$</sup>19<span> / mo</span></div>
                            <img src="{{ 'Admin Assets/Landing/assets/img/pricing-starter.png' }}" class="img-fluid"
                                alt="">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <h3 style="color: #ff901c;">Business Plan</h3>
                            <div class="price"><sup>$</sup>29<span> / mo</span></div>
                            <img src="{{ 'Admin Assets/Landing/assets/img/pricing-business.png' }}" class="img-fluid"
                                alt="">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <h3 style="color: #ff0071;">Ultimate Plan</h3>
                            <div class="price"><sup>$</sup>49<span> / mo</span></div>
                            <img src="{{ 'Admin Assets/Landing/assets/img/pricing-ultimate.png' }}" class="img-fluid"
                                alt="">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Pricing Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Testimonials</h2>
                    <p>What they are saying about us</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Little Einsteins!</h2>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ 'Admin Assets/Landing/assets/img/team/team-2.jpg' }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Chantikka Riffka</h4>
                                <span>Programmer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ 'Admin Assets/Landing/assets/img/team/team-2.jpg' }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Dora Kalifa</h4>
                                <span>System Analyst</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ 'Admin Assets/Landing/assets/img/team/team-2.jpg' }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Stita Maharani</h4>
                                <span>Designer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ 'Admin Assets/Landing/assets/img/team/team-1.jpg' }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Pristian Budi</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Team Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Our Clients</h2>
                    <p>Company who used us</p>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img
                                src="{{ asset('Admin Assets/Landing/assets/img/clients/client-1.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('Admin Assets/Landing/assets/img/clients/client-2.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('Admin Assets/Landing/assets/img/clients/client-3.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('Admin Assets/Landing/assets/img/clients/client-4.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('Admin Assets/Landing/assets/img/clients/client-5.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('Admin Assets/Landing/assets/img/clients/client-6.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('Admin Assets/Landing/assets/img/clients/client-7.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('Admin Assets/Landing/assets/img/clients/client-8.png') }}"
                                class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- End Clients Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>BINUS University,<br>Malang City, East Java</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>(0341) 12345678<br>(0341) 12345678</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>nerd@nomail.com<br>nerd@nomail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Everyday<br>24 Hours</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="{{ route('landing') }}" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="">
                            <span>Nerd.</span>
                        </a>
                        <p>Everyone to rocket, rev it up now. RRRRRRRRRRRRRRR.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('landing') }}">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bi bi-chevron-right nav-link scrollto"></i> <a href="#services">Services</a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            BINUS University <br>
                            Malang City, East Java<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong>(0341) 12345678<br>
                            <strong>Email:</strong>nerd@nomail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Nerd.</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Admin Assets/Landing/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('Admin Assets/Landing/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('Admin Assets/Landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin Assets/Landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Admin Assets/Landing/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Admin Assets/Landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Admin Assets/Landing/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Admin Assets/Landing/assets/js/main.js') }}"></script>
    <script>
        function openNewTab(event) {
            event.preventDefault();
            window.open(event.target.href, '_blank');
        }
    </script>
</body>

</html>
