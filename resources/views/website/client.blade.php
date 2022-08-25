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
     <div class="about-compnay section-spacing">
         <div class="container">
             <div class="row">
                 <div class=" col-lg-12 col-12 text order-lg-last  mt-4">
                     <div class="theme-title-one mb-20">
                     </div> <!-- /.theme-title-one -->
                     <p class="mb-20">
                     <div class="row">
                      {{-- @dd($client) --}}
                      @php echo $client->long_content @endphp

                     </div>
                     </p>
                 </div>
             </div>
         </div>
     </div>
 @endsection

