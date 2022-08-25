 @extends('layouts.master')

 @section('content')
     <section class="page-title"
         style="background-image:   linear-gradient(
                                  rgba(27, 40, 92, 0.7),
                                  rgba(28, 35, 61, 0.7)
                                ) ,url(website/images/client/clientTop.webp)">
         <div class="auto-container">
             <div class="title-box">
                 <h1>Our Valuable Clients</h1>
             </div>
             <ul class="page-breadcrumb">
                 <li><a href="index-2.html">Home</a></li>
                 <li>Client</li>
             </ul>
         </div>
     </section>
     <!--End Page Title-->

     <!-- Projects Section -->
     <section class="projects-section style-two">
         <div class="auto-container">
             <div class="mixitup-gallery">
                 <div class="filters clearfix">
                     <ul class="filter-tabs filter-btns clearfix">
                        {{-- @foreach ($partners as $item)
                             <li class="filter active" data-role="button" data-filter="all">{{ $item->caption }}</span>
                         </li>
                        @endforeach
                         --}}
                         <li class="filter" data-role="button" data-filter=".lawn-care">Saudi Arabic</span>
                         </li>
                         <li class="filter" data-role="button" data-filter=".garden-care">Quatar</span>

                     </ul>
                 </div>

                 <div class="filter-list row clearfix">
                     <!-- Project Block -->
                     <div class="project-block mix all col-lg-2 col-md-4 col-sm-6  col-4">
                         <div class="image-box">
                             <figure class="image"><img src="website/images/client/2.png" alt=""></figure>

                         </div>
                     </div>

                     <!-- Project Block -->
                     <div class="project-block mix all garden-care  snow-removal col-lg-2 col-md-4 col-sm-6 col-4">
                         <div class="image-box">
                             <figure class="image"><img src="website/images/client/41.jpg" alt=""></figure>

                         </div>
                     </div>

                     <!-- Project Block -->
                     <div class="project-block mix all planting snow-removal col-lg-2 col-md-4 col-sm-6 col-4">
                         <div class="image-box">
                             <figure class="image"><img src="website/images/client/42.jpg" alt=""></figure>

                         </div>
                     </div>

                     <!-- Project Block -->
                     <div class="project-block mix all snow-removal lawn-care planting col-lg-2 col-md-4 col-sm-6 col-4">
                         <div class="image-box">
                             <figure class="image"><img src="website/images/client/43.jpg" alt=""></figure>

                         </div>
                     </div>

                     <!-- Project Block -->
                     <div class="project-block mix all snow-removal garden-care col-lg-2 col-md-4 col-sm-6 col-4">
                         <div class="image-box">
                             <figure class="image"><img src="website/images/client/45.jpg" alt=""></figure>

                         </div>
                     </div>

                     <!-- Project Block -->
                     <div class="project-block mix all garden-care planting lawn-care col-lg-2 col-md-4 col-sm-6 col-4">
                         <div class="image-box">
                             <figure class="image"><img src="website/images/client/47.jpg" alt=""></figure>

                         </div>
                     </div>

                     <!-- Project Block -->
                     <div class="project-block mix all lawn-care col-lg-2 col-md-4 col-sm-6 col-4">
                         <div class="image-box">
                             <figure class="image"><img src="website/images/client/46.jpg" alt=""></figure>

                         </div>
                     </div>

                     <!-- Project Block -->
                     <div class="project-block mix all garden-care planting col-lg-2 col-md-4 col-sm-6 col-4">
                         <div class="image-box">
                             <figure class="image"><img src="website/images/client/48.jpg" alt=""></figure>

                         </div>
                     </div>

                     <!-- Project Block -->
                     <div class="project-block mix all garden-care planting col-lg-2 col-md-4 col-sm-6 col-4">
                         <div class="image-box">
                             <figure class="image"><img src="website/images/client/6.jpg" alt=""></figure>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <script src="website/js/jquery.js"></script>
     <script src="website/js/popper.min.js"></script>
     <script src="website/js/bootstrap.min.js"></script>
     <script src="website/js/jquery.fancybox.js"></script>
     <script src="website/js/owl.js"></script>
     <script src="website/js/wow.js"></script>
     <script src="website/js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="website/js/mixitup.js"></script>
     <script src="website/js/isotope.js"></script>
     <script src="website/js/appear.js"></script>
     <script src="website/js/script.js"></script>
 @endsection
