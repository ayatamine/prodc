<div
class="ud-header absolute top-0 left-0 z-40 flex w-full items-center bg-white"
>
<div class="container" x-data="{show_search:false}">

  <!-- the main menu -->
  <div class="relative -mx-4 flex items-center justify-between">
    <div class="w-64 max-w-full px-4">
      <a href="{{route('home')}}" class="navbar-logo block  py-2 md-py-3" >
        <img
        src="{{asset('assets/images/logo/WhatsApp Image 2023-05-03 at 5.54.05 PM.jpeg')}}"
        alt="{{ config('app.name') }}"
        class="header-logo h-full w-full object-contain"
      />
      </a>
    </div>
    <div class="flex w-full items-center justify-end px-10">
      <div class="w-full">
        <button
          id="navbarToggler"
          class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
        >
          <span
            class="relative my-[6px] block h-[2px] w-[30px] bg-white"
          ></span>
          <span
            class="relative my-[6px] block h-[2px] w-[30px] bg-white"
          ></span>
          <span
            class="relative my-[6px] block h-[2px] w-[30px] bg-white"
          ></span>
        </button>
        <nav
          id="navbarCollapse"
          class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-white lg:py-0 lg:px-4 lg:shadow-none xl:px-6"
        >
          <ul class="block lg:flex items-center blog">
            <li class="submenu-item group relative">
              <a
                href="javascript:void(0)"
                class="relative topnav-link active"
              >
              <span>    {{trans('frontend.home')}}   </span>
              <svg class="h-[0.6rem] w-[0.6rem] self-center mr-1" fill="#d0d5d7" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
              </a>
              <div
                class="submenu top-dropdown px-0 py-1 !pb-0 shadow-black drop-shadow-md"
              >
                <a
                  href="{{route('front_pages',['slug'=>'about'])}}"
                  class="topnav-link m-0 w-full" 
                >
                 {{trans('frontend.pages.about')}}
                </a>
                <a
                  href="{{route('front_pages',['slug'=>'values'])}}"
                  class="topnav-link m-0 w-full" 
                >
                 {{trans('frontend.pages.values')}}
                </a>
                <a
                  href="{{route('front_pages',['slug'=>'vision'])}}"
                  class="topnav-link m-0 w-full" 
                >
                 {{trans('frontend.pages.vision')}}
                </a>
               
              </div>
            </li>
            @foreach ($categories as $category)
                
            <li class="submenu-item group relative">
              <a
                href="javascript:void(0)"
                class="relative topnav-link"
              >
              <span>    {{app()->getLocale() == 'en' ? $category['title'] : $category['title_'.app()->getLocale()]}}   </span>
              <svg class="h-[0.6rem] w-[0.6rem] self-center mr-1" fill="#d0d5d7" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#dedede"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.178 19.569a.998.998 0 0 0 1.644 0l9-13A.999.999 0 0 0 21 5H3a1.002 1.002 0 0 0-.822 1.569l9 13z"></path></g></svg>
              </a>
              @if($category['child_categories'])
              
              <div
                class="submenu top-dropdown px-0 py-1 !pb-0 shadow-black drop-shadow-md"
              >
              @foreach ($category['child_categories'] as $child)
                <a
                  href="{{route('blog.index',['category'=>$child['slug']])}}"
                  class="topnav-link m-0 w-full" 
                >
                {{app()->getLocale() == 'en' ? $child['title'] : $child['title_'.app()->getLocale()]}}  
                </a>
               @endforeach
              </div>
              @endif
            </li>
            @endforeach
          </ul>

        </nav>
        
      </div>
      <div class="hidden justify-end pr-16 sm:flex items-center gap-3 lg:pr-0">
        <button @click="show_search =!show_search"  >
          <svg class="h-6 w-8 text-primaryTextColor"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
          </svg>
        </button>
    
        <!-- primary button -->
        <a href="index.html" class="primary-btn md-button block w-max">{{trans('frontend.demande_your_service')}}</a>
      </div>
    </div>
  </div>
  <!-- the search box -->
  <div x-show="show_search" class="search-box w-full absolute top-[4rem] left-0 bg-white border-t border-b p-3 px-20">
    <input type="text" class="white-input-theme mx-auto" placeholder="ادخل عبارة البحث ...">
  </div>
</div>
</div>