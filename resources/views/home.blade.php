@extends('layouts.app')
@section('title')
    الرئيسية
@endsection
@section('content')
    @include('layouts.front.home.hero')

    {{-- jobs section --}}
    @livewire('home-jobs-section')

    {{-- about us section  --}}
    @include('layouts.front.home.about')

    {{-- steps to get prodc --}}
    @include('layouts.front.home.steps')

    {{-- prodc network --}}
    @include('layouts.front.home.prodc_network')

    {{-- testimonials --}}
    @livewire('home-testimonials')
  
    {{-- partners section --}}
    @livewire('home-partners')

    <!-- download-app -->
    <section id="download-app" class="py-12 lg:pt-[50px] lg:pb-[50px] bg-white mb-5">
      <div
           class="mt-4 items-center justify-center overflow-hidden  lg:flex lg:w-4/5 mx-auto"
           >
             <div class="text-center w-36 mx-auto lg:w-[210px] lg:ml-[17px] h-4/5">
               <div class="relative z-10 inline-block p-4">
                 <img
                   src="assets/images/home/prodc_app.jpg"
                   alt="image"
                   class="mx-auto  lg:ml-auto rtl:lg:mr-auto"
                 />
               </div>
             </div>
             <div
               class="w-full  px-7 sm:px-12 md:p-8 lg:w-3/5  lg:px-10 "
             >
               <div class="intro-cards py-3 mx-4">
                 <p class="text-base md:text-xl text-[#1d3c5f] mb-2 px-6 leading-10  text-center">حمل تطبيق المحترف القوي الأمين  </p> 
                 <p class="text-xl text-yellow-500 mb-2 px-6 leading-10 text-center font-semibold">PRODC  </p> 
                 
                 <p class="text-base text-[#1d3c5f] mb-2  text-center font-semibold">تطبيق لتأكيد وضمان جودة الخدمات بأيادي المحترف القوي الأمين</p> 
               </div>
              <div class="flex justify-center gap-3 p-4 mt-3">
                <a href="https://itunes.apple.com/" target="_blank" >
                  <img src="assets/images/hero/app_store.png" class="h-12" alt="Download on the App Store">
                 </a>
                <a href="https://play.google.com/" target="_blank">
                  <img src="assets/images/hero/google_play.png" class="h-12" alt="Download on the google Play">
                 </a>
              </div>
             </div>
             
           </div>
    </section>

@endsection
