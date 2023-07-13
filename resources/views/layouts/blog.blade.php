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
        
        {{-- <div id="preloader" class="fixed top-0 left-0 w-full h-full bg-sectionTitleColor z-40">
            <svg role="status" class="absolute top-1/2 left-1/2 h-8 w-8 animate-spin mr-2  fill-theme" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
        </div> --}}
        {{-- {{ $slot }} --}}
        @extends('layouts.front.blogheader')
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
