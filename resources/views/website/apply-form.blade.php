 @extends('layouts.master')




 @section('content')
     <section class="main-contact-area ptb-100">
         <div class="container">

             <form id="contactForm ">
                 <div class="contact_usFormTitle mt-5">
                     <h2 class="text-center">Apply Form</h2>
                 </div>
                 <div class="row">
                     <div class="col-lg-6 col-sm-6">
                         <div class="form-group">
                             <input type="text" name="name" id="name" required data-error="Please enter your name"
                                 placeholder=" Name">
                             <div class="help-block with-errors"></div>
                         </div>
                     </div>
                     <div class="col-lg-6 col-sm-6">
                         <div class="form-group">
                             <input type="email" name="email" id="email" required
                                 data-error="Please enter your email" placeholder="Your Email">
                             <div class="help-block with-errors"></div>
                         </div>
                     </div>
                     <div class="col-lg-6 col-sm-6">
                         <div class="form-group">
                             <input type="text" name="phone_number" id="phone_number" required
                                 data-error="Please enter your number" placeholder="Your Phone">
                             <div class="help-block with-errors"></div>
                         </div>
                     </div>
                     <div class="col-lg-6 col-sm-6">
                         <div class="form-group">
                             <input type="text" name="msg_subject" id="msg_subject" required
                                 data-error="Please enter your subject" placeholder="Position">
                             <div class="help-block with-errors"></div>
                         </div>
                     </div> 
                       <div class="col-lg-6 col-sm-6">
                         <div class="form-group">
                             <input type="text" name="msg_subject" id="msg_subject" required
                                 data-error="Please enter your subject" placeholder="Country">
                             <div class="help-block with-errors"></div>
                         </div>
                     </div>
                      <div class="col-lg-6 col-sm-6">
                         <div class="form-group">
                             <input type="file" name="msg_subject" id="msg_subject" required
                                 data-error="Please enter your subject" placeholder="Position">
                             <div class="help-block with-errors"></div>
                         </div>
                     </div>
                     <div class="col-lg-12 col-md-12">
                         <div class="form-group">
                             <textarea name="message" id="message" cols="30" rows="10" required data-error=""
                                 placeholder="If Any Question ?"></textarea>
                             <div class="help-block with-errors"></div>
                         </div>
                     </div>

                     <div class="send-message-boxs">
                         <span>Submit</span>
                     </div>
                 </div>
             </form>

     </section>
 @endsection
