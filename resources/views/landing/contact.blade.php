@extends('landing.main')
@section('title', 'Contact')
@section('content')
    
<!-- HERO
================================================== -->
<section class="page-banner-area page-contact">
    <div class="overlay"></div>
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-12 text-center">
                <div class="page-banner-content">
                    <h1 class="display-4 font-weight-bold">Got a question?</h1>
                    <p>We'd love to talk about how we can help you.</p>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>


  <!-- SECTIONS
    ================================================== -->
    <section id="contact-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-map-marker"></i>
                        <h4>Address</h4>
                        <p class="lead">153 Williamson Plaza, 09514</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-mail"></i>
                        <h4>Email</h4>
                        <p class="lead">supportdb@dthememascot.com</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-phone"></i>
                        <h4>Phone Number</h4>
                        <p class="lead">+23-68017684</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8 col-lg-6">
                    <h5>Leave a Message</h5>
                    <!-- Heading -->
                    <h2 class="section-title mb-2 ">
                        Tell us about <span class="font-weight-normal">yourself</span>
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-5 ">
                        Whether you have questions or you would just like to say hello, contact us.
                    </p>

                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-6">
                   <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                    <!-- Contacts Form -->
                    <form class="contact_form" action="mail.php">
                        <div class="row">
                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="name" id="name" required="" placeholder="John Doe" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your email address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" name="email" id="email" required="" placeholder="john@gmail.com" type="email">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <div class="w-100"></div>

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Subject
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="subject" id="subject" required="" placeholder="Web design" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your Phone Number
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" id="phone" name="phone" required="" placeholder="1-800-643-4500" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>

                        <!-- Input -->
                        <div class="form-group mb-5">
                            <label class="h6 small d-block text-uppercase">
                                How can we help you?
                                <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <textarea class="form-control" rows="4" name="message" id="message" required="" placeholder="Hi there, I would like to ..."></textarea>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="">
                           <input name="submit" type="submit" class="btn btn-primary btn-circled" value="Send Message">
                           
                            <p class="small pt-3">We'll get back to you in 1-2 business days.</p>
                        </div>
                    </form>
                    <!-- End Contacts Form -->
                </div>

                <div class="col-lg-6 col-md-6">
                    <!-- START MAP -->
                    <div id="map" ></div>
                    <!-- END MAP -->
                </div>
            </div>
        </div>
    </section>
 <footer class="section " id="footer">
   <div class="overlay footer-overlay"></div>
   <!--Content -->
   <div class="container">
     <div class="row justify-content-start">
       <div class="col-lg-4 col-sm-12">
         <div class="footer-widget">
           <!-- Brand -->
           <a href="index.html" class="footer-brand text-white">
             Rappo
           </a>
           <p>Each theme featured at the Bootstrap marketplace has been reviewed by Bootstrap's creators.Lorem ipsum
             dolor sit amet, consectetur adipisicing elit.</p>
         </div>
       </div>

       <div class="col-lg-3 ml-lg-auto col-sm-12">
         <div class="footer-widget">
           <h3>Account</h3>
           <!-- Links -->
           <ul class="footer-links ">
             <li>
               <a href="#!">
                 Terms and conditions
               </a>
             </li>
             <li>
               <a href="#!">
                 Privacy policy
               </a>
             </li>
             <li>
               <a href="#!">
                 Affiliate services
               </a>
             </li>
             <li>
               <a href="#!">
                 Help and support
               </a>
             </li>
             <li>
               <a href="#!">
                 Frequently Asked Question
               </a>
             </li>
           </ul>
         </div>
       </div>


       <div class="col-lg-2 col-sm-6">
         <div class="footer-widget">
           <h3>About</h3>
           <!-- Links -->
           <ul class="footer-links">
            <li>
              <a href="about.html">
                About Us
              </a>
            </li>
             <li>
               <a href="service.html">
                 Services
               </a>
             </li>
             <li>
               <a href="pricing.html">
                 Pricing
               </a>
             </li>
             <li>
               <a href="project.html">
                Recent Projects
               </a>
             </li>

             <li>
               <a href="contact.html">
                 Contact
               </a>
             </li>
           </ul>
         </div>
       </div>

       <div class="col-lg-2 col-sm-6">
         <div class="footer-widget">
           <h3>Socials</h3>
           <!-- Links -->
           <ul class="list-unstyled footer-links">
             <li><a href="https://www.facebook.com/themefisher"><i class="fab fa-facebook-f"></i>Facebook</a></li>
             <li>
               <a href="https://www.twitter.com/themefisher"><i class="fab fa-twitter"></i>Twitter
               </a></li>
             <li><a href="https://www.pinterest.com/themefisher/"><i class="fab fa-pinterest-p"></i>Pinterest
               </a></li>
             <li><a href="https://themefisher.com/"><i class="fab fa-linkedin"></i>linkedin
               </a></li>
             <li><a href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA"><i class="fab fa-youtube"></i>YouTube
               </a></li>
           </ul>
         </div>
       </div>
     </div> <!-- / .row -->


     <div class="row text-right pt-5">
       <div class="col-lg-12">
         <div class="overflow-hidden">
           <!-- Copyright -->
          <p class="footer-copy">
            Copyright &copy; <script>var CurrentYear = new Date().getFullYear()
            document.write(CurrentYear)
          </script>. Designed &amp; Developed by <a class="current-year" href="https://themefisher.com/">Themefisher</a>
          </p>
         </div>
       </div>
     </div> <!-- / .row -->
   </div> <!-- / .container -->
 </footer>


 <!--  Page Scroll to Top  -->

 <a id="scroll-to-top" class="scroll-to-top js-scroll-trigger" href="#top-header">
   <i class="fa fa-angle-up"></i>
 </a>
 @endsection