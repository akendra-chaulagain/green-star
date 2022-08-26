 @extends('layouts.master')
    @push('title')
       Home
    @endpush

 @section('content')
     @include('website.slider')
     @include('website.message')
     @include('website.home-job_category')
     @include('website.home-job')
     @include('website.counter')
     @include('website.testomonials')
 @endsection
