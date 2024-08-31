@extends('front.master')
@section('title','About')
@section('about-active','active')
@include('front.partials.head')
@section('content')

    <!-- hero Start -->
    <x-hero-section title="About Us" subtitle="About"></x-hero-section>
    <!-- hero End -->

    <!-- About Start -->
        @include('front.partials.about')
    <!-- About End -->

    <!-- Features Start -->
        @include('front.partials.features')
    <!-- Features End -->


    <!-- Team Start -->
        @include('front.partials.team')
    <!-- Team End -->

@endsection
