 @extends('layouts.master')
 @push('title')
     Gallery
 @endpush
 @section('content')
     <section class="page-title"
         style="background-image:   linear-gradient(
                                  rgba(27, 40, 92, 0.7),
                                  rgba(28, 35, 61, 0.7)
                                ) ,url('https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=1600')">
         <div class="auto-container">
             <div class="title-box">
                 <h1>Image Gallery</h1>
             </div>
             <ul class="page-breadcrumb">
                 <li><a href="/">Home</a></li>
                 <li>Image Gallery</li>
             </ul>
         </div>
     </section>



     <div class="folder-spacing">
         <div class="container">
             <div class="row">
                 <!----gallary data----->

                 @if (isset($photos))
                     <div class="folder-spacing">
                         <div class="container">
                             <div class="row">
                                 <!----gallary data----->
                                 @foreach ($photos as $photo)
                                     <div class="col-md-3 col-sm-4">
                                         <a href="{{ route('galleryview', $photo->nav_name) }}">
                                             <div class="folder">
                                                 <div class="folder-inside"
                                                     style="background: url({{ $photo->banner_image }}) no-repeat; background-size: cover;">
                                                 </div>
                                             </div>
                                             <div class="folder_data">
                                                 <a href="#">{{ $photo->caption }}</a>
                                             </div>
                                         </a>
                                     </div>
                                 @endforeach
                                 <!----gallary data close----->
                             </div>
                         </div>
                     </div>
             </div>
             @endif


         </div>
     </div>
     </div>
     </div>
 @endsection
