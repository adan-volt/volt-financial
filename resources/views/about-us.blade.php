@extends('layouts.master')

@section('title') Volt Financial Services @endsection

{{-- @section('meta_description')
    <meta property="og:title" content="VOLT: Solar, Batteries & Home Improvement.">
    <meta name="description" content="Explore efficient solar panel energy solutions and cutting-edge energy storage options at Volt Solar Energy. Power your future sustainably.">
@endsection --}}

@section('content')

    @include('components.sections.banner',
    [
        'img' => 'images/About/main-about.png', 
        'text_color' => 'text-white', 
		// 'class_image_mobile' => 'bg-mobile-solar-energy',
		'title' => __("translations.Banner Title About"), 
		'subtitle' => __("translations.Banner Subtitle About"),
    ])

    {{-- Mobile Component --}}
    @include('components.sections.mobile.banner-mobile',
    [
        'img' => 'images/About/main-about.png', 
        'text_color' => 'text-white', 
        'title' => __("translations.Banner Title About"), 
        'subtitle' => __("translations.Banner Subtitle About"),
    ])
    {{-- End Mobile Component --}}

    @include('components.sections.about-1', 
    [
        'pretxt' => __("translations.Who we are"),
        'title' => __("translations.Title1 About"), 
        'text' => __("translations.Text About"),
        'img' => 'images/About/main-about-2.png',
    ])

    {{-- Tablet Component --}}
    {{-- @include('components.sections.tablet.about-1-md', 
    [
        'pretxt' => __("translations.Who we are"),
        'title' => __("translations.Title1 About"), 
        'text' => __("translations.Text About"),
        'img' => 'images/About/Tablet/main-about-3.jpg',
    ]) --}}
    {{-- End Tablet Component --}}

    @include('components.sections.about-2', 
    [
        'pretxt' => __("translations.Modern Home Upgrades"),
        'title' => __("translations.Home Improvement"),
        'text_ab' => __("translations.text-ab"),
    ])

    {{-- Mobile Component --}}
    @include('components.sections.mobile.footer-img-sm', 
    [
        'img' => 'images/Footer/image-footer.png',
    ])
    {{-- End Mobile Component --}}

    {{-- // Title footer --}}
    @php
        $text_title_footer = __('translations.Title Footer About');
    @endphp
    {{-- // END Title footer --}}

@endsection

@section('script')
    @if(session('status'))
    <script>
        $(document).ready(function () {
            $('#modal-form-result').modal('show');
        });
    </script>
    @endif
@endsection