 @extends('layouts.master')


 @section('content')
     <section class="page-title"
         style="background-image:   linear-gradient(
                          rgba(27, 40, 92, 0.7),
                          rgba(28, 35, 61, 0.7)
                        ) ,url(images/contact/contactTop.webp)">
         <div class="auto-container">
             <div class="title-box">
                 <h1>Contact Us</h1>
             </div>
             <ul class="page-breadcrumb">
                 <li><a href="index-2.html">Home</a></li>

                 <li>Contact Us</li>
             </ul>
         </div>
     </section>
     <!--End Page Title-->

     <!-- Contact Info Section -->
     <section class="contact-info-section">
         <div class="auto-container">
             <div class="inner-container" style="background-image: url(images/contact/contact-2.webp);">
                 <div class="row clearfix">
                     <div class="address-column col-lg-5 col-md-12 col-sm-12">
                         <div class="inner-column">
                             <div class="address-box wow fadeIn" data-wow-delay="300ms">
                                 <h5>Visit us on</h5>
                                 <div class="text">DE 198 Tech Road<br> Bridge Str, Basundhara 10026 <br>Kathmandu
                                     Nepal.
                                 </div>

                             </div>
                         </div>
                     </div>

                     <div class="info-column col-lg-7 col-md-12 col-sm-12">
                         <div class="inner-column">
                             <div class="row clearfix">
                                 <!-- Info Box -->
                                 <div class="info-box col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                                     <div class="contact-info">
                                         <h5><span class="flaticon-phone"></span> phone</h5>
                                         <p> +997-1-4363540 </p>
                                     </div>
                                 </div>

                                 <!-- Info Box -->
                                 <div class="info-box col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="1200ms">
                                     <div class="contact-info">
                                         <h5><span class="flaticon-email"></span> Email</h5>
                                         <p><a href="#">greenstaroverseas@gmail.com</a></p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--End Contact Info Section -->

     <!-- Contact Form -->
     <section class="contact-form-section">
         <div class="auto-container">
             <div class="sec-title text-center">
                 <h2>Send Us a <span>Message</span></h2>
             </div>

             <div class="contact-form">
                 <form method="post" action="https://t.commonsupport.com/groundwork/sendemail.php" id="contact-form">
                     <div class="row clearfix">

                         <div class="form-group col-lg-4 col-md-6 col-sm-12">
                             <input type="text" name="username" value="" placeholder="Name" required>
                         </div>

                         <div class="form-group col-lg-4 col-md-6 col-sm-12">
                             <input type="email" name="email" value="" placeholder="Email " required>
                         </div>

                         <div class="form-group col-lg-4 col-md-12 col-sm-12">
                             <input type="text" name="phone" value="" placeholder="Phone" required>
                         </div>

                         <div class="form-group col-lg-12 col-md-12 col-sm-12">
                             <textarea name="message" placeholder="Your Needs..."></textarea>
                         </div>

                         <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                             <button type="submit" class="theme-btn btn-style-one">Submit Now</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </section>
 @endsection
