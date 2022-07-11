@extends('Frontend.layout.layout')
@section('content')
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
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#alumini">Alumini</a></li>
                    <li><a href="#testimonials">Feedback</a></li>

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

            <a class="btn-book-a-table" href="#courses">Register Here</a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
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
                        <a href="#courses" class="btn-book-a-table">Register Here</a>
                        <a href="https://www.youtube.com/watch?v=wIk_JDNpEKw"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="{{ asset('home/img/computer.png') }}" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="300">
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
                            <h4>Er. Pankaj Pandey <br />(Ex WIPRO Employee )</h4>
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
        </section>
        <!-- End About Section -->

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

        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Courses</h2>
                    <p>Register <span>with us</span></p>
                </div>
                <div class="row">
                    @foreach ($courses as $course)
                        <div class="col-md-3 col-sm-6">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#" class="image">
                                        <img src="{{ asset('upload/course/' . $course->image) }}"
                                            style="height:200px;width:300px;">
                                    </a>
                                    <span class="product-discount-label">25% Off</span>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">{{ $course->name }}</a></h3>
                                    <div class="price">Rs. {{ $course->price }}</div>
                                </div>
                                <a href="{{ url('regcourse/' . $course->id) }}" class="add-cart">Register Here</a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>


        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery section-bg mt-5">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Gallery</h2>
                    <p>Check <span>Our Gallery</span></p>
                </div>

                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($gallery as $gall)
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="{{ asset('upload/gallery/' . $gall->uploadimage) }}"><img
                                src="{{ asset('upload/gallery/' . $gall->uploadimage) }}" class="img-fluid" alt=""></a>
                         </div>
                        @endforeach



                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Gallery Section -->

        <!--Alumini-->
        <section id="alumini" class="alumini">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Alumini</h2>
                    <p>Placed <span>Students</span></p>
                </div>
                <div class="container">
                    <div class="row">
                        @foreach ($alumini as $alm)
                            <div class="col-md-3 col-sm-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="{{ asset('upload/placed-student/' . $alm->uploadimage) }}">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">{{ $alm->name }}</h3>
                                        <span class="post">{{ $alm->companyname }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </section>


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
                                                I joined MeeNCaT PC in 3rd semester of my BCA course and I was very much
                                                confused about the placement and was thinking of MCA as I was not from
                                                reputated college to think about college placements but my life got changed
                                                after joining MeeNCaT our instructor Er. Pankaj Pandey Sir motivated me and
                                                made the fire burn inside me for placement.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Abhishek Sethi</h3>
                                            <h4>Wipro Employee</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="{{ asset('home/img/testimonials/abhishek-sethi.jpeg') }}"
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
                                                I Am Feeling very proud after Joining the MeeNCaT PC and getting the
                                                Placement in Top IT MNC Wipro and Infosys. This all credit is goes to
                                                MeeNCaT PC. This is a unique place where any one can Complete there dreams
                                                and am saying very thank you to Er. Pankaj Pandey sir who make me this.
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
                                        <img src="{{ asset('home/img/testimonials/unknown.jpeg') }}"
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

                <form action="{{ route('savecontact') }}" method="post" role="form"
                    class="php-email-form p-3 p-md-4">
                    @csrf
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
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    {{-- <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> --}}
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
                <!--End Contact Form -->

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection
