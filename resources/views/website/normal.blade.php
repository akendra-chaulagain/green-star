 @extends('layouts.master')



 @section('content')
     <!--Page Title-->
     <section class="page-title"
         style="background-image:   linear-gradient(
                  rgba(27, 40, 92, 0.7),
                  rgba(28, 35, 61, 0.7)
                ) ,url(images/aboutus/about-nepal.jpg)">
         <div class="auto-container">
             <div class="title-box">
                 <h1>{{ $normal->caption }}</h1>
             </div>
             <ul class="page-breadcrumb">
                 <li><a href="/">Home</a></li>
                 {{-- <li>{{ $normal->$slug }}</li> --}}

                 <li>{{ $normal->caption }}</li>
             </ul>
         </div>
     </section>
     <!--End Page Title-->

     <!-- About Us -->
     <section class="about-us">
         <div class="auto-container">
             <div class="row clearfix">
                 <!-- Content Column -->
                 <div
                     class=" @if ($normal->banner_image != null) content-column col-lg-6 col-md-12 col-sm-12 @else  col-lg-12 col-md-12 col-sm-12 @endif">
                     <div class="inner-column">
                         <h2> <span>{{ $normal->caption }}</span> </h2>
                         <div class="text">{!! $normal->long_content !!}</div>
                     </div>
                 </div>

                 <!-- Video Column -->
                 @if ($normal->banner_image != null)
                     <div class="video-column col-lg-6 col-md-12 col-sm-12">

                         <div class="inner-column">
                             <figure class="image wow fadeIn" data-wow-delay="600ms"><img src="{{ $normal->banner_image }}"
                                     alt="banner_image">
                             </figure>
                         </div>
                     </div>
                 @endif


             </div>
         </div>
     </section>
 @endsection

 <!-- End About Us -->
