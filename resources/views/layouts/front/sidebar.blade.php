<div class="fixed overflow-y-scroll overflow-x-visible inset-y-0 left-0 z-20 bg-white w-[18.5rem]  py-4 transform transition duration-300 ease-in-out h-screen "
x-show="open"
x-transition:enter="transition transform ease-out duration-300"
x-transition:enter-start="-translate-x-full opacity-0"
x-transition:enter-end="translate-x-0 opacity-100"
x-transition:leave="transition transform ease-in duration-300"
x-transition:leave-start="translate-x-0 opacity-100"
x-transition:leave-end="-translate-x-full opacity-0"
@click.away="open = false"
:class="{ '-translate-x-full': !open }">
<div class="relative" x-show="open">
 <div  class="absolute border-l -right-16 top-8 bg-white w-16 h-16 z-40 flex items-center justify-center ">
   <button class="border rounded p-1 bg-body" @click.prevent="open =false">
     <svg class="h-9 w-9 text-gray-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />  <line x1="9" y1="9" x2="15" y2="15" />  <line x1="15" y1="9" x2="9" y2="15" /></svg>
   </button>
  </div>
</div>
<!-- Sidebar content here -->
<div class="dropdown px-4 md:hidden" x-data="{dropOpen:false}">
<button class="w-full flex justify-between items-center gap-2 bg-white  text-gray-700 font-semibold p-1 text-sm border-1" @click="dropOpen = !dropOpen">
 <div class="flex justify-start gap-2 items-center ">
   <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 192.756 192.756"><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M0 0h192.756v192.756H0V0z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M184.252 156.166V36.62H8.537v119.546h175.715z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#33a457" d="M96.502 156.137V36.589H8.504v119.548h87.998z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#cc2229" d="M118.932 93.49l11.347 3.584-11.351 3.738.222 12.086-7.142-9.802-11.112 3.658 6.836-9.58-6.839-9.318 11.007 3.48 6.698-9.125.334 11.279z"/><path d="M127.129 115.793c-4.4 3.689-10.205 5.902-16.393 5.902-13.997 0-25.343-11.361-25.343-25.377 0-14.014 11.347-25.375 25.343-25.375 6.211 0 12.059 2.218 16.467 5.931-5.578-6.741-13.846-11.056-23.271-11.056-16.795 0-30.412 13.633-30.412 30.451 0 16.816 13.617 30.449 30.412 30.449 9.371.001 17.619-4.251 23.197-10.925z" fill-rule="evenodd" clip-rule="evenodd" fill="#cc2229"/><path fill="none" stroke="#000" stroke-width=".497" stroke-miterlimit="2.613" d="M184.252 156.166V36.62H8.537v119.546h175.715z"/></svg>
 العربية  
 </div>
 <svg class="h-5 w-5 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M18 15l-6-6l-6 6h12" transform="rotate(180 12 12)" /></svg>
</button>
<div class="absolute  bg-white border  dropdown-content min-w-[14rem] text-right ltr:text-left z-40 flex flex-col" x-show="dropOpen">
 <a  @click="dropOpen = !dropOpen" href="#" class="text-sm text-gray-900 flex justify-start items-center gap-2 p-2 border-b hover:bg-white">
   <svg class="h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 192.756 192.756"><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M0 0h192.756v192.756H0V0z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M184.252 149.619V43.135H8.504v106.484h175.748z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#33348e" d="M184.252 149.619V43.135H8.504v106.484h175.748z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M116.75 149.619v-37.152h67.502v-32.18H116.75V43.135H75.058v37.152H8.504v32.18h66.554v37.152h41.692z"/><path fill="#fff" d="M29.907 43.135l154.345 93.521v12.965H163.23L8.504 55.869V43.135h21.403z"/><path fill="#fff" d="M162.85 43.135L8.504 136.656v12.965h21.023l154.725-93.752V43.135H162.85z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#cc2229" d="M184.252 86.106H109.09V43.135H83.738v42.971H8.504v20.542h75.234v42.971h25.352v-42.971h75.162V86.106z"/><path fill="#cc2229" d="M8.584 43.135l61.055 37.152H55.936L8.504 51.424v-8.289h.08zM8.504 149.434v.187h13.394l53.16-32.348v-4.806h-5.805L8.504 149.434zM184.252 149.621v-7.762l-48.303-29.392h-13.703l61.059 37.154h.947zM169.764 43.135l-53.014 32.26v4.892h5.662l61.055-37.152h-13.703z"/></svg>
   English
 </a>
 <a  @click="dropOpen = !dropOpen" href="#"  class=" text-sm text-gray-900 flex justify-start items-center gap-2 p-2 hover:bg-white">
   <svg  class="h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 216.504 128.088"><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M216.252 127.836V.252h-216v127.584h216z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#27569f" d="M71.748 127.836V.252H.252v127.584h71.496z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#cc2136" d="M216.252 127.836V.252h-71.496v127.584h71.496z"/><path fill="none" stroke="#000" stroke-width=".504" stroke-miterlimit="2.613" d="M216.252 127.836V.252h-216v127.584h216z"/></svg>
   Francais
 </a>
</div>
</div> 
<ul class="mt-4 border-t py-4">
<li class="group relative my-2">
 <a    href="{{route('services.index')}}"   class="sidenav-link"           >
 <svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"/>
 </svg>
 <span> {{trans('frontend.browse_demanded_services')}}  </span>
 </a>
</li>
<li class="group relative my-2"> 
 <a    href="{{route('professionals.index')}}"   class="sidenav-link"           >
   <svg class="h5 w-5"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
   </svg>
 <span>  {{trans('frontend.browse_professionals')}} </span>
 </a>
</li>
<li class="group relative my-2"> 
 <a    href="portfolios.html"   class="sidenav-link"           >
   <svg class="h-5 w-5 "  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />  <circle cx="8.5" cy="8.5" r="1.5" />  <polyline points="21 15 16 10 5 21" /></svg>
    <span> {{trans('frontend.browse_portfolios')}}   </span>
 </a>
</li>
<li class="group relative my-2">
 <a    href="{{route('categories')}}"   class="sidenav-link"           >
   <svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
   </svg>
    <span> {{trans('frontend.categories')}}  </span>
 </a>
</li>
@professional
<li class="group relative my-2">
 <a    href="{{route('home')}}"   class="sidenav-link"           >
   <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="4" width="6" height="5" rx="2" />  <rect x="4" y="13" width="6" height="7" rx="2" />  <rect x="14" y="4" width="6" height="7" rx="2" />  <rect x="14" y="15" width="6" height="5" rx="2" /></svg>
    <span> {{trans('frontend.add_new_offer')}}  </span>
 </a>
</li>
@else
<li class="group relative my-2">
 <a    href="{{route('services.create')}}"   class="sidenav-link"           >
   <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="4" width="6" height="5" rx="2" />  <rect x="4" y="13" width="6" height="7" rx="2" />  <rect x="14" y="4" width="6" height="7" rx="2" />  <rect x="14" y="15" width="6" height="5" rx="2" /></svg>
    <span> {{trans('frontend.add_new_service')}}  </span>
 </a>
</li>
@endif 
<!-- vision and about -->
<li class="group relative my-2">
 
 <div class="dropdown " x-data="{dropOpen:false}">
   <a    href=""  class=" sidenav-link flex items-center justify-between"        @click.prevent="dropOpen = !dropOpen"   >
     <div class=" flex items-center justify-between gap-3">
       <svg class="h-5 w-5 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
       </svg>
       <span> {{trans('frontend.know_more')}}</span>
     </div>
     <svg x-show="!dropOpen" class="h-5 w-5 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="15 6 9 12 15 18" /></svg>
     <svg  x-show="dropOpen" class="h-5 w-5 text-gray-700"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="6 9 12 15 18 9" /></svg>                      </a>
   </a>
   <div class="  dropdown-content min-w-[14rem] text-right ltr:text-left z-40 flex flex-col" x-show="dropOpen">
     <ul class=" border-t p-4">
      {{-- @php 
             $main_pages =$value = Cache::remember('main_pages', 600, function () {
                  return \App\Models\Page::whereHas('language',function ($query){
                    $query->whereLabel(app()->getLocale());
                  })
                  ->whereLike('slug','%'.'vision about value%')
                  ->get();
              });
      @endphp
      
       @foreach ($main_pages as $page)

       <li class="group relative my-2">
         <a   href="{{route('front_pages',['slug'=>$page->slug])}}"   class="sidenav-link flex items-center"           >
           <svg class="h-4 w-4 text-gray-700"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <line x1="2" y1="12" x2="22" y2="12" />  <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" /></svg>
           <span>{{$page->title}}</span>
         </a>
       </li>
       @endforeach --}}
       <li class="group relative my-2">
         <a   href="{{route('front_pages',['slug'=>'about'])}}"   class="sidenav-link flex items-center"           >
           <svg class="h-4 w-4 text-gray-700"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <line x1="2" y1="12" x2="22" y2="12" />  <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" /></svg>
           <span>{{trans('frontend.pages.about')}}</span>
         </a>
       </li>
       <li class="group relative my-2">
         <a   href="{{route('front_pages',['slug'=>'values'])}}"   class="sidenav-link flex items-center"           >
           <svg class="h-5 w-5 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />  <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />  <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />  <line x1="11" y1="6" x2="20" y2="6" />  <line x1="11" y1="12" x2="20" y2="12" />  <line x1="11" y1="18" x2="20" y2="18" /></svg>
           <span>{{trans('frontend.pages.values')}}</span>
         </a>
       </li>
       <li class="group relative my-2">
         <a   href="{{route('front_pages',['slug'=>'vision'])}}"   class="sidenav-link flex items-center"           >
           <svg class="h-4 w-4 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="3" y="12" width="6" height="8" rx="1" />  <rect x="9" y="8" width="6" height="12" rx="1" />  <rect x="15" y="4" width="6" height="16" rx="1" />  <line x1="4" y1="20" x2="18" y2="20" /></svg>                            
           <span>{{trans('frontend.pages.vision')}}</span>
         </a>
       </li>
       
       
     </ul>
   </div>
 </div> 
</li>
<!-- links of prodc -->
<li class="group relative my-2">
 
 <div class="dropdown " x-data="{dropOpen:false}">
   <a    href=""  class="sidenav-link flex items-center justify-between"        @click.prevent="dropOpen = !dropOpen"   >
     <div class="  flex items-center justify-between gap-3">
       <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="4" width="6" height="5" rx="2" />  <rect x="4" y="13" width="6" height="7" rx="2" />  <rect x="14" y="4" width="6" height="7" rx="2" />  <rect x="14" y="15" width="6" height="5" rx="2" /></svg>
        <span>{{trans('frontend.prodc')}}</span>
     </div>
     <svg x-show="!dropOpen" class="h-5 w-5 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="15 6 9 12 15 18" /></svg>
     <svg  x-show="dropOpen" class="h-5 w-5 text-gray-700"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="6 9 12 15 18 9" /></svg>                      </a>
   <div class="  dropdown-content min-w-[14rem] text-right ltr:text-left z-40 flex flex-col" x-show="dropOpen">
     <ul class=" border-t p-4">
       <li class="group relative my-2">
         <a   href="ethiks.html"   class="sidenav-link flex items-center"           >
           <svg class="h-5 w-5 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M14 3v4a1 1 0 0 0 1 1h4" />  <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />  <line x1="9" y1="9" x2="10" y2="9" />  <line x1="9" y1="13" x2="15" y2="13" />  <line x1="9" y1="17" x2="15" y2="17" /></svg>
           <span>{{trans('frontend.prodc_charter')}}</span>
         </a>
       </li>
       <li class="group relative my-2">
         <a   href="properties.html"   class="sidenav-link flex items-center"           >
           <svg class="h-5 w-5 text-gray-700 "  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="9" x2="19" y2="9" />  <line x1="5" y1="15" x2="19" y2="15" />  <line x1="11" y1="4" x2="7" y2="20" />  <line x1="17" y1="4" x2="13" y2="20" /></svg>
           <span> {{trans('frontend.prodc_characteristics')}}</span>
         </a>
       </li>
       <li class="group relative my-2">
         <a   href="index.html#prodc-network"   class="sidenav-link flex items-center"           >
           <svg class="h-5 w-5 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M17.905 13.057c2.208 1.756 3.436 3.308 3.012 4.035-.67 1.146-5.204-.204-10.129-3.016-4.924-2.812-8.374-6.022-7.705-7.168.418-.716 2.347-.458 4.936.524" />  <circle cx="12" cy="12" r="6" /></svg>
           <span> {{trans('frontend.prodc_professionals2')}}</span>
         </a>
       </li>
       <li class="group relative my-2">
         <a   href="{{route('packages')}}"   class="sidenav-link flex items-center"           >
           <svg class="h-4 w-4 text-gray-700 "  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M11 3L20 12a1.5 1.5 0 0 1 0 2L14 20a1.5 1.5 0 0 1 -2 0L3 11v-4a4 4 0 0 1 4 -4h4" />  <circle cx="9" cy="9" r="2" /></svg>
           <span>  {{trans('frontend.prodc_packages')}}</span>
         </a>
       </li>
       <li class="group relative my-2">
         <a   href={{route('blog.index')}}"   class="sidenav-link flex items-center"           >
           <svg class="h-5 w-5 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />  <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
           <span> {{trans('frontend.blog')}}</span>
         </a>
       </li>
       <li class="group relative my-2">
         <a   href="guarantite.html"   class="sidenav-link flex items-center"           >
           <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M14 3v4a1 1 0 0 0 1 1h4" />  <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />  <path d="M9 15l2 2l4 -4" /></svg>
           <span> {{trans('frontend.gurantite')}}</span>
         </a>
       </li>
       <li class="group relative my-2">
         <a   href="faqs.html"   class="sidenav-link flex items-center"           >
           <svg  class="h-4 w-5 text-gray-700" fill="#393737" width="64px" height="64px" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" stroke="#605c5c"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g> <path d="M48,0A24.0275,24.0275,0,0,0,24,24a6,6,0,0,0,12,0,12,12,0,0,1,24,0c0,5.2031-3.0586,8.3965-8.0859,13.0371C47.2617,41.32,42,46.1719,42,54a6,6,0,0,0,12,0c0-2.4434,2.2969-4.6875,6.0469-8.1445C65.0859,41.2031,72,34.834,72,24A24.0275,24.0275,0,0,0,48,0Z"></path> <path d="M48,72A12,12,0,1,0,60,84,12.0119,12.0119,0,0,0,48,72Z"></path> </g> </g></svg>
           <span>{{trans('frontend.faqs')}}</span>
         </a>
       </li>
       <li class="group relative my-2">
         <a   href="conditions.html"   class="sidenav-link flex items-center"           >
           <svg class="h-5 w-5 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />  <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />  <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />  <line x1="11" y1="6" x2="20" y2="6" />  <line x1="11" y1="12" x2="20" y2="12" />  <line x1="11" y1="18" x2="20" y2="18" /></svg>
           <span> {{trans('frontend.use_conditions')}}</span>
         </a>
       </li>
       <li class="group relative my-2">
         <a   href="privacy.html"   class="sidenav-link flex items-center"           >
           <svg class="h-5 w-5 text-gray-700 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
           </svg>
           
           <span>{{trans('frontend.use_privacy')}}</span>
         </a>
       </li>
       
     </ul>
   </div>
 </div> 
</li>

</ul>
</div>