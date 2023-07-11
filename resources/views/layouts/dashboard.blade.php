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
    </head>

    <body class="antialiased font-Noto bg-body">
        {{-- {{ $slot }} --}}
        @extends('layouts.front.header')
        <section class="px-4 md:px-14 py-6 mt-[65px] bg-body text-gray-700 relative overflow-hidden ">

            <div class="w-full mx-auto my-6 md:flex gap-3" id="myTabContent" >
              @include('layouts.front.dashboard_navigation')
              <div class="w-full md:w-9/12 mt-2  lg:mt-0 ">
              @yield('content') 
              </div>
            </div>   
        </section>
        @livewire('notifications')
        @extends('layouts.front.footer')
        @include('sweetalert::alert')

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

        <script src="{{asset('assets/js/main.js')}}"></script>
        <script>
        // ==== for menu scroll
            const pageLink = document.querySelectorAll(".ud-menu-scroll");

            pageLink.forEach((elem) => {
                elem.addEventListener("click", (e) => {
                
                if(elem.getAttribute("href") !='categories.html' && elem.getAttribute("href") !='blog.html'){
                    e.preventDefault();
                    document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                    });
                }
                });
            });

            // section menu active
            function onScroll(event) {
                const sections = document.querySelectorAll(".ud-menu-scroll");
                const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

                for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                    .querySelector(".ud-menu-scroll");
                    //.classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
                }
            }

            window.document.addEventListener("scroll", onScroll);

            //listen to browser event

        </script>
    </body>
</html>
