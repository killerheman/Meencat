<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MeenCat PC</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('home/img/meencat-logo.jpeg') }}" rel="icon">
    <link href="{{ asset('home/img/meencat-logo.jpeg') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <!-- Template Main CSS File -->
    <link href="{{ asset('home/css/main.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('home/img/meencat-logo.jpeg') }}" alt="">
                <!-- <h1>MeenCat<span>.</span></h1> -->
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#testimonials">Feedback</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <a class="btn-book-a-table" href="#">Register Here</a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div
                    class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <!-- <h2 data-aos="fade-up" class="text-center" >MeeNcat PC</h2>
          <p data-aos="fade-up" data-aos-delay="100">Placement Surety 100%</p> -->

                    <div class="text-effect">
                        <span>MeeNCat-PC</span>
                    </div>
                    <br /><br /><br />
                    <img src="{{ asset('home/img/100job.png') }}" alt="" style="height:100px ;">
                    <br />
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#" class="btn-book-a-table">Register Here</a>
                        <a href="https://www.youtube.com/watch?v=wIk_JDNpEKw"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="{{ asset('home/img/computer.png') }}" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Learn More <span>About Us</span></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img"
                        style="background-image: url({{ asset('home/img/pankaj-pandey.png') }}) ;background-repeat: no-repeat;"
                        data-aos="fade-up" data-aos-delay="150">
                        <div class="call-us position-absolute">
                            <h4>Er. Pankaj Pandey <br/>(Ex WIPRO Employee )</h4>
                            <p>C.E.O.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">

                            <p class="text-justify">
                                Becoming a Software Engineer, like in TCS, Wipro, Infosys, CTS, IBM and All , is
                                undoubtedly a dream of many in this country. It is not only one of the most prestigious
                                one could ever think of.
                            </p>
                            <p class="text-justify">
                                MeeNCaT PC for Placement In Top IT MNC, For Engineering students like BCA, B.Tech, MCA,
                                BE, Diploma and B.Sc Students.
                            </p>
                            <div class="position-relative mt-4">
                                <img src="{{ asset('home/img/placement.jpg') }}" class="img-fluid" alt="">
                                <a href="https://www.youtube.com/watch?v=wIk_JDNpEKw" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row g-0 mt-5">
                    <img src="{{ asset('home/img/banner2.JPG') }}" class="img-fluid" alt="...">
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="why-box">
                            <h3>Why Choose MeeNCat ?</h3>
                            <p class="text-justify">
                                Becoming a Software Engineer, like in TCS, Wipro, Infosys, CTS, IBM and All , is
                                undoubtedly a dream of many in this country. It is not only one of the most prestigious
                                one could ever think of.
                            </p>
                            <p class="text-justify">
                                MeeNCaT PC for Placement In Top IT MNC, For Engineering students like BCA, B.Tech, MCA,
                                BE, Diploma and B.Sc Students.
                            </p>
                            {{-- <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div> --}}
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="row gy-4">

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column text-justify">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>Top Placement Institutes</h4>
                                    <p>It is one and unique of the top placement coaching institutes in India,
                                        established in 2018 with an aim to help placement the aspirants clear their
                                        exams of TCS NQT, TCS Digital, Wipro ENTH, Wipro WILP, CTS Genc, HCL and Infosys
                                        all.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box d-flex flex-column text-justify">
                                    <i class="bi bi-gem"></i>
                                    <h4>Get placed in desired MNC's</h4>
                                    <p>The placements are decent and u can expect to get placed in your desired
                                        multinational companies like TCS/ Wipro/CTS/Accenture.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box d-flex flex-column text-justify">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>Highest Placement Records</h4>
                                    <p>In this Year 2022 MeeNCaT Create a Number of Placement offer 201 Aspirant's in
                                        TCS, Wipro, Infosys and CTS only.
                                    </p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <div class="container mt-5">
            <img src="{{ asset('home/img/banner.jpeg') }}" class="img-fluid" alt="...">
        </div>
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg mt-5">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Students</h2>
                    <p>What Are They <span>Saying About Us</span></p>
                </div>

                <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                                suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh
                                                et. Maecen aliquam, risus at semper.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Astha Yadav</h3>
                                            <h4>TCS Employee</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('home/img/testimonials/t3.jpeg') }}"
                                            class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            {{-- <h3>Sara Wilsson</h3> --}}
                                            <h4>Wipro Employee</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('home/img/testimonials/t1.jpeg') }}"
                                            class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Enim nisi quem export duis labore cillum quae magna enim sint quorum
                                                nulla quem veniam duis minim tempor labore quem eram duis noster aute
                                                amet eram fore quis sint minim.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            {{-- <h3>Jena Karlis</h3> --}}
                                            <h4>Mindtree/ Deloitte</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('home/img/testimonials/t2.jpeg') }}"
                                            class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam
                                                tempor noster veniam enim culpa labore duis sunt culpa nulla illum
                                                cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            {{-- <h3>John Larson</h3> --}}
                                            <h4>TCS Employee</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('home/img/testimonials/t4.jpeg') }}"
                                            class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        {{-- <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container-fluid" data-aos="fade-up">

                <div class="section-header">
                    <h2>Events</h2>
                    <p>Share <span>Your Moments</span> In Our Restaurant</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{ asset('home/img/events-1.jpg') }})">
                            <h3>Custom Parties</h3>
                            <div class="price align-self-start">$99</div>
                            <p class="description">
                                Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis
                                facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{ asset('home/img/events-2.jpg') }})">
                            <h3>Private Parties</h3>
                            <div class="price align-self-start">$289</div>
                            <p class="description">
                                In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo
                                vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end"
                            style="background-image: url({{ asset('home/img/events-3.jpg') }})">
                            <h3>Birthday Parties</h3>
                            <div class="price align-self-start">$499</div>
                            <p class="description">
                                Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam.
                                Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
                            </p>
                        </div><!-- End Event item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section --> --}}

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery section-bg mt-5">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Gallery</h2>
                    <p>Check <span>Our Gallery</span></p>
                </div>

                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('home/img/gallery/g1.JPG') }}"><img
                                    src="{{ asset('home/img/gallery/g1.JPG') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('home/img/gallery/g2.JPG') }}"><img
                                    src="{{ asset('home/img/gallery/g2.JPG') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('home/img/gallery/g3.JPG') }}"><img
                                    src="{{ asset('home/img/gallery/g3.JPG') }}" class="img-fluid"
                                    alt=""></a></div>
                        {{-- <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('home/img/gallery/g4.jpg') }}"><img
                                    src="{{ asset('home/img/gallery/g4.jpg') }}" class="img-fluid"
                                    alt=""></a></div> --}}
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('home/img/gallery/g5.JPG') }}"><img
                                    src="{{ asset('home/img/gallery/g5.JPG') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('home/img/gallery/g6.JPG') }}"><img
                                    src="{{ asset('home/img/gallery/g6.JPG') }}" class="img-fluid"
                                    alt=""></a></div>
                        {{-- <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('home/img/gallery/g7.jpg') }}"><img
                                    src="{{ asset('home/img/gallery/g7.jpg') }}" class="img-fluid"
                                    alt=""></a></div> --}}
                        {{-- <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('home/img/gallery/gallery-8.jpg') }}"><img
                                    src="{{ asset('home/img/gallery/gallery-8.jpg') }}" class="img-fluid"
                                    alt=""></a></div> --}}
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Need Help? <span>Contact Us</span></p>
                </div>

                <div class="mb-3">
                    <iframe style="border:0; width: 100%; height: 350px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471.8118898581502!2d82.14203344990462!3d26.75557841740443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399a08bb2cea17ed%3A0x220c98fa67aa3cd8!2sVaishnavi%20Tyres!5e0!3m2!1sen!2sin!4v1656529047847!5m2!1sen!2sin"
                        frameborder="0" allowfullscreen></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Our Address</h3>
                                <p>Sarveshwary Nagar Naka ByPass Near<br /> Dr. R.M.L. University, Ayodhya</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>meencat.cdp.pp@gmail.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+91 8004312479 (Ayodhya)<br />
                                    +91 9005020357 (Lucknow)</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item  d-flex align-items-center">
                            <i class="icon bi bi-share flex-shrink-0"></i>
                            <div>
                                <h3>Opening Hours</h3>
                                <div><strong>Mon-Fri:</strong> 7AM - 7PM;
                                    <strong>Saturday/Sunday:</strong> Closed
                                </div>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <form action="#" method="post" role="form" class="php-email-form p-3 p-md-4">
                    <div class="row">
                        <div class="col-xl-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" required>
                        </div>
                        <div class="col-xl-6 form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject"
                            placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
                <!--End Contact Form -->

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Address</h4>
                        <p>
                            Sarveshwary Nagar Naka ByPass Near Dr. R.M.L. University.(Ayodhya)<br><br>Gomti Nagar Near
                            Sahara Hospital Chota Bharwara. (Lucknow)
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservations</h4>
                        <p>
                            <strong>Phone:</strong> +91 8004312479 (Ayodhya)<br />
                            +91 9005020357 (Lucknow)<br>
                            <strong>Email:</strong>meencat.cdp.pp@gmail.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Fri: 7AM</strong> - 7PM<br>
                            Saturday/Sunday: Closed
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="https://www.youtube.com/results?search_query=meencat+pc" class="twitter"><i
                                class="bi bi-youtube"></i></a>
                        <a href="https://m.facebook.com/people/Meencat-PC/100004117117442/" class="facebook"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/meencat_pc/?igshid=YmMyMTA2M2Y=" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-telegram"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MeeNCat</span></strong>. All Rights Reserved Designed by<a
                    href="http://saanvinnovation.com/"> Saanvi Invovation Pvt. Ltd</a>
            </div>


    </footer>

    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('home/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('home/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('home/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('home/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('home/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('home/js/main.js') }}"></script>

</body>

</html>
