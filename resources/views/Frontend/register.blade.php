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
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('index') }}">About</a></li>
                    <li><a href="{{ route('index') }}">Courses</a></li>
                    <li><a href="{{ route('index') }}">Gallery</a></li>
                    <li><a href="{{ route('index') }}">Alumini</a></li>
                    <li><a href="{{ route('index') }}">Feedback</a></li>
                    <li><a href="{{ route('index') }}">Contact</a></li>
                </ul>
            </nav>
            <!-- .navbar -->
            <a class="btn-book-a-table" href="#register">Register Here</a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header>

    <!-- ======= Contact Section ======= -->
    <section id="register" class="register">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <br><br>
                <h2>Registration</h2>
                <p>Register<span>with us</span></p>
            </div>

            <div class="row gy-4">


            </div><!-- End Info Item -->

            <form action="{{route('saveregister')}}" method="post" role="form" class="php-email-form p-3 p-md-4">
                @csrf
                <div class="row">
                    <div class="col-xl-6 form-group">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                            required>
                    </div>
                    <div class="col-xl-6 form-group">
                        <label class="form-label">Father Name</label>
                        <input type="text" class="form-control" name="fname" id="email" placeholder="Father Name"
                            required>
                    </div>
                    <div class="col-xl-6 form-group">
                        <label for="form-select" class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" placeholder="D.O.B"
                            required>
                    </div>
                    <div class="col-xl-6 form-group">
                        <label class="form-label">Aadhar Number</label>
                        <input type="text" name="aadharno" class="form-control" placeholder="Aadhar Number"
                            required>
                    </div>
                    <div class="col-xl-6 form-group">
                        <label class="form-label">Mobile</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Mobile" required>
                    </div>

                    <div class="col-xl-6 form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>

                    <div class="col-xl-6 form-group">
                        <label class="form-label">Maximum Qualification</label>
                        <input type="text" class="form-control" name="maxqualification"
                            placeholder="Maximum Qualification" required>
                    </div>
                    <div class="col-xl-6 form-group">
                        <label class="form-label">Dream Company</label>
                        <input type="text" name="dreamcompany" class="form-control" placeholder="Dream Company"
                            required>
                    </div>
                    <div class="col-xl-6 form-group">
                        <label class="form-label">Course</label>
                        <input type="text" name="course" value="{{ $course->name }}" class="form-control" required readonly>
                    </div>
                    <div class="col-xl-6 form-group">
                        <label class="form-label">Price</label>
                        <input type="text" name="price" value="{{ $course->price }}" class="form-control"
                            required readonly>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <label class="form-label">Course</label><br>
                    <select id="course" name="course" class="form-control">
                        <option selected>Choose Course</option>
                        <option value="up">C Programming</option>
                        <option value="mp">C++ Programming</option>
                        <option value="delhi">Java Programming</option>
                        <option value="panjab">Data Stracture</option>
                        <option vlaue="telangana">Project Training</option>
                        <option value="hariyana">Placement</option>
                        <option value="goa">Other</option>
                    </select>
                </div> --}}
                <div class="text-center"><button type="submit">Register and Pay</button></div>
            </form>
            <!--End Contact Form -->

        </div>
    </section>
    <!-- End Contact Section -->
@endsection
