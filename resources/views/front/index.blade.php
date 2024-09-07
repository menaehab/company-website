@extends('front.master')
@section('title', 'Home')
@section('home-active', 'active')
@section('content')

    <!-- Hero Start -->
    @include('front.partials.hero')
    <!-- Hero End -->


    <!-- About Start -->
    @include('front.partials.about')
    <!-- About End -->


    <!-- Newsletter Start -->
    <div class=" bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">Ready to get started</h3>
                    <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small>
                    <div class="position-relative w-100 mt-3">
                        <form action="{{ route('front.subscriber.store') }}" method="POST">
                            @csrf
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Enter Your Email" style="height: 48px;" name="email">
                            <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </form>
                    </div>
                    @if (session('success'))
                        <div class="text-success">{{ session('success') }}</div>
                    @endif
                    <x-validation-error name="email"></x-validation-error>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="max-height: 250px;"
                        src="{{ asset('front-assets') }}/img/newsletter.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Service Start -->
    @include('front.partials.service')
    <!-- Service End -->


    <!-- Features Start -->
    @include('front.partials.features')
    <!-- Features End -->


    <!-- Client Start -->
    <div class=" bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel client-carousel">
                <a href="#"><img class="img-fluid" src="{{ asset('front-assets') }}/img/logo-1.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front-assets') }}/img/logo-2.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front-assets') }}/img/logo-3.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front-assets') }}/img/logo-4.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front-assets') }}/img/logo-5.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front-assets') }}/img/logo-6.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front-assets') }}/img/logo-7.png"
                        alt=""></a>
                <a href="#"><img class="img-fluid" src="{{ asset('front-assets') }}/img/logo-8.png"
                        alt=""></a>
            </div>
        </div>
    </div>
    <!-- Client End -->


    <!-- Testimonial Start -->
    @include('front.partials.testimonial')
    <!-- Testimonial End -->


    <!-- Team Start -->
    @include('front.partials.team')
    <!-- Team End -->

@endsection
