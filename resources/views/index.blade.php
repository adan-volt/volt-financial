@extends('layouts.master')

@section('title') Volt Financial Services @endsection

{{-- @section('meta_description')
    <meta property="og:title" content="VOLT: Solar, Batteries & Home Improvement.">
    <meta name="description" content="Explore efficient solar panel energy solutions and cutting-edge energy storage options at Volt Solar Energy. Power your future sustainably.">
@endsection --}}

@section('content')

    @include('components.sections.banner',
    [
        'img' => 'images/Main/main-home.png', 
        'text_color' => null, 
		'title' => __("translations.Banner Title"), 
		'subtitle' => __("translations.Banner Subtitle"),
    ])

    {{-- Mobile Component --}}
    @include('components.sections.mobile.banner-mobile',
    [
        'img' => 'images/Main/main-home.png', 
        'text_color' => null, 
        'title' => __("translations.Banner Title"), 
        'subtitle' => __("translations.Banner Subtitle"),
    ])
    {{-- End Mobile Component --}}

    @include('components.sections.landing-1', 
    [
        'pretxt' => __("translations.Our Services"),
        'title' => __("translations.Title1"), 
        'subtitle' => __("translations.Subtitle1"), 
        'title_sm' => __("translations.Small Title"), 
        'bullet' => 'images/Icons/Bullet.svg',
        'boldtxt1' => __("translations.Bold Text 1"),
        'text1' => __("translations.Text1"),
        'bullet' => 'images/Icons/Bullet.svg',
        'boldtxt2' => __("translations.Bold Text 2"),
        'text2' => __("translations.Text2"),
        'bullet' => 'images/Icons/Bullet.svg',
        'boldtxt3' => __("translations.Bold Text 3"),
        'text3' => __("translations.Text3"),
        'bullet' => 'images/Icons/Bullet.svg',
        'boldtxt4' => __("translations.Bold Text 4"),
        'text4' => __("translations.Text4"),
        'bullet' => 'images/Icons/Bullet.svg',
        'boldtxt5' => __("translations.Bold Text 5"),
        'text5' => __("translations.Text5"),
        'img' => 'images/Main/main-home-2.png',
    ])

    @include('components.sections.landing-2', 
    [
        'pretxt' => __("translations.Empowering Sustainability and Savings"),
        'title' => __("translations.Solar Financing"),
        'text1_sf' => __("translations.text1_sf"),
        'text2_sf' => __("translations.text2_sf"),
    ])

    @include('components.sections.landing-3', 
    [
        'pretxt' => __("translations.Upgrading Your Home"),
        'title' => __("translations.Home Improvement"),
        'text1_hi' => __("translations.text1_hi"),
        'text2_hi' => __("translations.text2_hi"),
    ])

    @include('components.sections.landing-4', 
    [
        'pretxt' => __("translations.Energy Independence for a Better Future"),
        'title' => __("translations.Reducing Impact"),
        'icon1' => 'images/Icons/Roof.svg',
        'text1' => __("translations.text1"),
        'icon2' => 'images/Icons/Subtract.svg',
        'text2' => __("translations.text2"),
        'icon3' => 'images/Icons/Efficient.svg',
        'text3' => __("translations.text3"),
        'img' => 'images/Main/main-home-5.png',
    ])

    {{-- Mobile Component --}}
    @include('components.sections.mobile.footer-img-sm', 
    [
        'img' => 'images/Footer/image-footer.png',
    ])
    {{-- End Mobile Component --}}

    {{-- // Title footer --}}
    @php
        $text_title_footer = __('translations.Title Footer Index');
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