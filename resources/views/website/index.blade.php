 @extends('layouts.master')


@section('content')
    @include('website.slider')
    @include('website.message')
        @include('website.home-job_category')
    @include('website.counter')
    @include('website.testomonials')
@endsection
