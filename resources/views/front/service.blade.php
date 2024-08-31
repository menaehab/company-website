@extends('front.master')
@section('title','Services')
@section('service-active','active')
@section('content')
<!-- Hero Start -->
    <x-hero-section title="Services" subtitle="Services"></x-hero-section>
<!-- Hero End -->
<!-- Service Start -->
    @include('front.partials.service')
<!-- Service End -->
<!-- Testimonial Start -->
    @include('front.partials.testimonial')
<!-- Testimonial End -->
@endsection
