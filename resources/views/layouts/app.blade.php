<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  dir="rtl">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>{{ config('app.name') }} - @yield('title')</title>
        <meta name="og:title" content="{{ config('app.name') }}" />
        <meta name="description" content="أنجز أعمالك بسهولة وبجودة عالية على يد نخبة من أفضل المحترفين الأكفَّاء والأمناء من خلال المحترف القوي الأمين" />
        <meta name="og:description" content="أنجز أعمالك بسهولة وبجودة عالية على يد نخبة من أفضل المحترفين الأكفَّاء والأمناء من خلال المحترف القوي الأمين" />
        <meta name="og:image" content="{{asset('assets/images/logo/real_logo.jpeg')}}" />
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:url" content="{{ config('app.url') }}">
        <link rel="shortcut icon" href="{{asset('assets/images/logo/real_logo.jpeg')}}" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/logo/real_logo.jpeg')}}"/>
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/logo/real_logo.jpeg')}}"/>
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/logo/real_logo.jpeg')}}"/>
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/logo/real_logo.jpeg')}}"/>
        <link
          rel="shortcut icon"
          href="{{asset('assets/images/logo/logonew.jpg')}}"
          type="image/x-icon"
        />
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
     
    
        <!-- ==== WOW JS ==== -->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <!-- <link rel="stylesheet" href="https://unpkg.com/flickity@2.3.0/dist/flickity.css"> -->
    
        <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="{{asset('assets/css/tailwind.css')}}" />
    
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts
        @stack('scripts')
        @yield('styles')
    </head>

    <body class="antialiased font-Noto bg-body">
        {{-- {{ $slot }} --}}
        @extends('layouts.front.header')
        @yield('content')
        @livewire('notifications')
        @extends('layouts.front.footer')
        @extends('layouts.front.scripts')
        @include('sweetalert::alert')
        @yield('scripts')
        <!-- ====== Back To Top Start -->
        <a
        href="javascript:void(0)"
        class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark"
        >
        <span
            class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"
        ></span>
        </a>
        <!-- ====== Back To Top End -->
        <script>
              // ===== wow js
            new WOW().init();
        </script>
    </body>
</html>
