@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


 <section class="page-title"
         style="background-image:   linear-gradient(
                                  rgba(27, 40, 92, 0.7),
                                  rgba(28, 35, 61, 0.7)
                                ) ,url(website/images/client/clientTop.webp)">
         <div class="auto-container">
             <div class="title-box">
                 <h1>CONTACT US</h1>
             </div>
             <ul class="page-breadcrumb">
                 <li><a href="index-2.html">Home</a></li>
                 <li>Contact</li>
             </ul>
         </div>
     </section>

    <section class="contact-info-area bg-color pt-100 pb-70">
        <div class="container">
			<div class="contact_top_data">

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info">
                    <i class="fa-solid fa-envelope"></i>
                        <h3>Email Us:</h3>
                        <a
                            href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#88e0ede4e4e7c8edf2e1e7a6ebe7e5"><span
                                class="__cf_email__"
                                data-cfemail="adc5c8c1c1c2edc8d7c4c283cec2c0">[email&#160;protected]</span></a>
                        <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#325b5c545d7257485b5d1c515d5f"><span
                                class="__cf_email__"
                                data-cfemail="b2dbdcd4ddf2d7c8dbdd9cd1dddf">[email&#160;protected]</span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info">
                       <i class="fa-solid fa-phone-flip"></i>
                        <h3>Call Us:</h3>
                        <a href="tel:+1-(123)-456-7890">Tel. +1 (123) 456 7890</a>
                        <a href="tel:+1-(514)-312-6678">Tel. +1 (514) 312-6678</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info">
                       <i class="fa-solid fa-location-dot"></i>
                        <h3>London</h3>
                        <a href="#">9170 Millbrook Rd, Newark, IL 60541</a>
                    </div>
                </div>
                
			</div>
            </div>
        </div>
    </section>





    <section class="main-contact-area ptb-100">
        <div class="container">
         
            <form id="contactForm"> 
				  <div class="contact_usFormTitle">
                <h2>Drop Us A Message For Any Query.</h2>
            </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name"  required
                                data-error="Please enter your name" placeholder="Your Name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email"  required
                                data-error="Please enter your email" placeholder="Your Email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required
                                data-error="Please enter your number"  placeholder="Your Phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject"  required
                                data-error="Please enter your subject" placeholder="Your Subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message"  id="message" cols="30" rows="10" required
                                data-error="Write your message" placeholder="Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                   
                    <div class="send-message-boxs">
                        <span>Send Message</span>
                    </div
                
            </form>
        </div>
    </section>


    <div class="map-area">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.259529530363!2d85.32578481546629!3d27.740140030655994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1937a2fa88e9%3A0x13ccc33dc1d77276!2sGreen%20Star%20Overseas%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1661422756859!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
