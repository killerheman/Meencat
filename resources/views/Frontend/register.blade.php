@extends('Frontend.layout.layout')
@section('content')


 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <br><br>
            <h2>Registration</h2>
            <p> <span>Registration</span></p>
        </div>

        <div class="row gy-4">

            
            </div><!-- End Info Item -->

        <form action="#" method="post" role="form" class="php-email-form p-3 p-md-4">
           @csrf
            <div class="row">
                <div class="col-xl-6 form-group">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name"
                        placeholder="Your Name" required>
                </div>
                <div class="col-xl-6 form-group">
                    <label class="form-label">Father Name</label>

                    <input type="text" class="form-control" name="fname" id="email"
                        placeholder="Father Name" required>
                </div>
                <div class="col-xl-6 form-group">
                    <label for="form-select" class="form-label">Date of Birth</label>
                    <input type="date" name="date" class="form-control" id="name"
                        placeholder="D.O.B" required>
                </div>
                <div class="col-xl-6 form-group">
                    <label class="form-label">Adhar No.</label>

                    <input type="text" name="adhar" class="form-control" id="name"
                        placeholder="Adhar Number" required>
                </div>
                <div class="col-xl-6 form-group">
                    <label class="form-label">Mobile</label>
                    <input type="text" class="form-control" name="phone"
                        placeholder="Mobile" required>
                </div>
                
                <div class="col-xl-6 form-group">
                    <label class="form-label">Email</label>

                    <input type="email" class="form-control" name="email" 
                        placeholder="Your Email" required>
                </div>
                
           
                <div class="col-xl-6 form-group">
                    <label class="form-label">Maximum Qualification</label>
                    <input type="text" class="form-control" name="maxQualification" 
                        placeholder="Maximum Qualification" required>
                </div>
                <div class="col-xl-6 form-group">
                    <label class="form-label">Dream Company</label>
                    <input type="text" name="adhar" class="form-control" id="name"
                        placeholder="Which is your dream Company" required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label">Course for Registration</label><br>
                <select id="select" name="state" class="form-control" >
                  <option selected>Choose...</option>
                  <option value="up">C Programming</option>
                  <option value="mp">C++ Programming</option>
                  <option value="delhi">Java Programming</option>
                  <option value="panjab">Data Stracture</option>
                  <option vlaue="telangana">Project Training</option>
                  <option value="hariyana">Placement</option>
                  <option value="goa">Other</option>          
                </select>
              </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
        <!--End Contact Form -->

    </div>
</section>
<!-- End Contact Section -->

@endsection