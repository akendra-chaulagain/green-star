 @extends('layouts.master')
 @push('title')
     Video Gallery
 @endpush

 @section('content')
     <section class="page-title"
         style="background-image:   linear-gradient(
                                  rgba(27, 40, 92, 0.7),
                                  rgba(28, 35, 61, 0.7)
                                ) ,url('https://images.pexels.com/photos/1181401/pexels-photo-1181401.jpeg?auto=compress&cs=tinysrgb&w=1600')">
         <div class="auto-container">
             <div class="title-box">
                 <h1>Video Gallery</h1>
             </div>
             <ul class="page-breadcrumb">
                 <li><a href="/">Home</a></li>
                 <li>Video Gallery</li>
             </ul>
         </div>
     </section>

     {{-- Video gallery --}}
     {{-- @if (isset($photos)) --}}
     <section class="gallery mt-3 mb-4">
         <div class="container">
             <div class="gallery-view">
                 <div class="row" id="lightgallery">
                     @foreach ($photos as $photo)
                         <div class="item col-md-4 galleryImageItem">
                             <iframe width="100%" height="315" src="{{$photo->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </div>
                     @endforeach


                 </div>
             </div>
         </div>
     </section>
     {{-- @endif --}}
 @endsection
