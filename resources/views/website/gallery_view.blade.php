 @extends('layouts.master')
 @push('title')
     Image Gallery
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

     {{-- image gallery --}}
     @if (isset($photos))
         <section class="gallery mt-3 mb-4">
             <div class="container">
                 <div class="gallery-view">
                     <div class="row" id="lightgallery">
                         @foreach ($photos as $photo)
                             <div class="item col-lg-3 col-md-4 col-sm-6 col-12 galleryImageItem"
                                 data-src="/uploads/photo_gallery/{{$photo->file}}" data-sub-html="{{$photo->caption}}">
                                 <a href="">
                                     <img src="/uploads/photo_gallery/{{$photo->file}}" data-sub-html="{{$photo->caption}}"
                                         alt="Blue Ocean" />
                                 </a>
                             </div>
                         @endforeach


                     </div>
                 </div>
             </div>
         </section>
     @endif
 @endsection
