 @extends('layouts.master')


    @push('title')
       Apply Form
    @endpush

 @section('content')
     <section class="main-contact-area ptb-100">
         <div class="container">

             <form action="{{ route('contactstore') }}" method="POST" enctype='multipart/form-data'>
                 @csrf
                 <div class="contact_usFormTitle mt-5">
                     <h2 class="text-center">Apply Form</h2>
                 </div>
                 <div class="row">
                     <div class="col-lg-6 col-sm-6">

                         {{-- name --}}
                         <div class="form-group">
                             <input type="text" name="name" id="name"  placeholder=" Name">
                         </div>
                         <span class="text-danger">
                             @error('name')
                                 {{ $message }}
                             @enderror
                         </span>

                     </div>

                     {{-- email --}}
                     <div class="col-lg-6 col-sm-6">
                         <div class="form-group">
                             <input type="email" name="email" id="email"  placeholder="Your Email">
                         </div>
                         <span class="text-danger">
                             @error('email')
                                 {{ $message }}
                             @enderror
                         </span>
                     </div>

                     {{-- contact no --}}
                     <div class="col-lg-6 col-sm-6">
                         <div class="form-group">
                             <input type="number" name="number" id="phone_number"  placeholder="Your Phone">

                         </div>
                         <span class="text-danger">
                             @error('number')
                                 {{ $message }}
                             @enderror
                         </span>
                     </div>


                     {{-- job caption --}}

                     <div class="col-lg-6 col-sm-6">
                         <div class="form-group">
                             <input type="text" name="apply_for"  placeholder="Position"
                                 value="{{ $job_detail->caption ?? '' }}">
                         </div>
                         <span class="text-danger">
                             @error('apply_for')
                                 {{ $message }}
                             @enderror
                         </span>
                     </div>

                     {{-- country --}}
                     <div class="col-lg-6 col-sm-6">
                         <div class="form-group">
                             <input type="text" name="country"  placeholder="Country"
                                 value="{{ $job_detail->getJob->country ?? '' }}">

                         </div>
                     </div>

                     {{-- file --}}
                     <div class="col-lg-6 col-sm-6">
                         <div class="form-group">
                             <input type="file" name="file" placeholder="Position">
                         </div>
                     </div>
                     {{-- message --}}
                     <div class="col-lg-12 col-md-12">
                         <div class="form-group">
                             <textarea name="message"  data-error="" placeholder="If Any Question ?"></textarea>
                         </div>
                     </div>
                     <input type="hidden" name="job_id" value="{{ $job_detail->getJob ?? '' }}">
                     <div class="send-message-boxs">
                         <button>Submit</button>
                     </div>
                 </div>
             </form>

     </section>
 @endsection
