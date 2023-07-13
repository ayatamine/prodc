    <!-- ====== Navbar Section Start -->
    <div
      class="ud-header absolute top-0 left-0 z-38 flex w-full items-center bg-white"
    >
      <div class="container">
        <div class="relative -mx-4 flex items-center justify-between">
          <div class="w-64 max-w-full px-4">
            <a href="index.html" class="navbar-logo block  py-2 md-py-3" >
              <img
              src="{{asset('assets/images/logo/WhatsApp Image 2023-05-03 at 5.54.05 PM.jpeg')}}"
              alt="{{ config('app.name') }}"
              class="header-logo h-full w-full object-contain"
            />
            </a>
          </div>
          <div class="flex w-full items-center justify-between px-4">
            <div>
              <button
                id="navbarToggler"
                class="absolute hidden right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
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
                class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:px-4 lg:shadow-none xl:px-6"
              >
                <ul class="block lg:flex items-center">
                  <li class="group relative">
                    <a
                      href="{{route('home')}}"
                      class="ud-menu-scroll topnav-link"
                    >
                     v-0
                    </a>
                  </li>
                  <li class="submenu-item group relative">
                    <a
                      href="index.html"
                      class="relative topnav-link"
                    >
                      {{trans('frontend.home')}}
                    </a>
                    <div
                      class="submenu top-dropdown px-0 py-1 shadow-black drop-shadow-md"
                    >
                      <a
                        href="{{route('front_pages',['slug'=>'about'])}}"
                        class="topnav-link m-0 w-full" style="padding:0.25rem 1rem;margin:0"
                        
                      >
                      {{trans('frontend.pages.about')}}
                      </a>
                      <a
                        href="{{route('front_pages',['slug'=>'values'])}}"
                        class="topnav-link m-0 w-full" style="padding:0.25rem 1rem;margin:0"
                        
                      >
                      {{trans('frontend.pages.values')}}
                      </a>
                      <a
                        href="{{route('front_pages',['slug'=>'vision'])}}"
                        class="topnav-link m-0 w-full" style="padding:0.25rem 1rem;margin:0"
                        
                      >
                      {{trans('frontend.pages.vision')}}
                      </a>
                     
                    </div>
                  </li>
                  <li class="group relative">
                    <a
                      href="{{route('charter')}}"
                      class="topnav-link "
                    >
                      {{trans('frontend.charter')}}
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="{{route('home')}}#about-us"
                      class="ud-menu-scroll topnav-link "
                    >
                       {{trans('frontend.prodc')}}
                    </a>
                  </li>                 
                  <li class="group relative">
                    <a
                      href="{{route('home')}}#prodc-network"
                      class="ud-menu-scroll topnav-link "
                    >
                    {{trans('frontend.prodc_professionals')}}
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="{{route('categories')}}"
                      class="ud-menu-scroll topnav-link "
                    >
                      {{trans('frontend.categories')}}
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="blog.html"
                      class="ud-menu-scroll topnav-link "
                    >
                    {{trans('frontend.blog')}}
                    </a>
                  </li>
                  <!-- <li class="submenu-item group relative">
                    <a
                      href="javascript:void(0)"
                      class="relative topnav-link"
                    >
                      الصفحات
                    </a>
                    <div
                      class="submenu top-dropdown px-0 py-1 shadow-black drop-shadow-md"
                    >
                      <a
                        href="index.html"
                        class="topnav-link m-0 w-full" style="padding:0.25rem 1rem;margin:0"
                        style="margin-right:0 !important;margin-left:0 !important"
                      >
                        اتصل بنا
                      </a>
                      <a
                        href="index.html"
                        class="topnav-link m-0 w-full" style="padding:0.25rem 1rem;margin:0"
                        style="margin-right:0 !important;margin-left:0 !important"
                      >
                      المدونة
                      </a>
                     
                    </div>
                  </li> -->
                </ul>

              </nav>
              
            </div>
            <div x-data="{ open: false,activeItem:false }" :class="{ 'overflow-hidden': open }" class="flex justify-end items-center gap-2">
             
              <!-- Sidebar -->
             @include('layouts.front.sidebar')
              @guest
                <div class="flex justify-start itmes-center gap-2">
                  <a href="{{route('login')}}" class="sm-button primary-btn">{{trans('frontend.login')}}</a>
                  <a href="{{route('register')}}" class="outline-btn !w-28">{{trans('frontend.register')}}</a>
                </div>
              @else
               <!-- messag component -->
              <div class="relative " x-data="{showMessages:false,toggle(){hideOthers(),this.showMessages = !this.showMessages}}">
                <div @click.prevent="toggle()" class="topNotMessCallable flex flex-row cursor-pointer truncate p-2   rounded" :class="showMessages && ' bg-body'" >
                    <div class="flex flex-row-reverse mr-2 lt:ml-2 w-full">
                        <div slot="icon" class="relative">
                            <div class="absolute text-xs rounded-full -mt-1 -mr-4 ltr:-ml-4 px-1 font-bold top-0 right-0 bg-red-700 text-white">3</div>
                            <svg class="h-5 w-5 md:h-6 md:w-6 text-gray-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />  <polyline points="22,6 12,13 2,6" /></svg>
                            
                        </div>
                    </div>
                </div>
                <div x-show="showMessages" class="topNotMess absolute w-[22rem] -left-44 md:left-0 mt-1 drop-shadow-md rounded-b border-t-0 z-10 bg-white">
                    <!-- notifications inside  -->
                  <div class="h-52 overflow-y-scroll">
                      <!-- notification item -->
                      <div class="border-b p-3 flex flex-row items-start ">
                        <div class="border p-1 w-[56px]  ">
                          <img data-src="https://via.placeholder.com/150" alt="Placeholder image" class=" lozad h-full w-full">
                        </div>
                        <div class="mr-4 lt:ml-4" style="width:calc(100% - 56px)">
                          <a href="" class="text-[13px] text-gray-700 hover:text-primaryTextColor">تم اضافة عرض على طلبك من قبل  عياط.</a>
                          <div class="flex items-center gap-1 text-[13px] ">
                            <svg class="h-4 w-4 text-gray-400 mt-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>منذ 30 دقيقة</span>
                          </div>
                        </div>
                      </div>
                      <!-- notification item -->
                      <div class="border-b p-3 flex flex-row items-start gap-2">
                        <div class="border p-1  w-[56px] ">
                          <img data-src="https://via.placeholder.com/150" alt="Placeholder image" class=" lozad h-full w-full">
                        </div>
                        <div class="mr-4 lt:ml-4" style="width:calc(100% - 56px)">
                          <a href="" class="text-[13px] text-gray-700 hover:text-primaryTextColor">تم اضافة عرض على طلبك من قبل  عياط والمحتوى يب مواثق كم مكشسي على سحبسب
                            .</a>
                          <div class="flex items-center gap-1 text-[13px] ">
                            <svg class="h-4 w-4 text-gray-400 mt-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>منذ 30 دقيقة</span>
                          </div>
                        </div>
                      </div>
                      <!-- notification item -->
                      <div class="border-b p-3 flex flex-row items-start ">
                        <div class="border p-1 w-[56px]  ">
                          <img data-src="https://via.placeholder.com/150" alt="Placeholder image" class=" lozad h-full w-full">
                        </div>
                        <div class="mr-4 lt:ml-4" style="width:calc(100% - 56px)">
                          <a href="" class="text-[13px] text-gray-700 hover:text-primaryTextColor">تم اضافة عرض على طلبك من قبل  عياط.</a>
                          <div class="flex items-center gap-1 text-[13px] ">
                            <svg class="h-4 w-4 text-gray-400 mt-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>منذ 30 دقيقة</span>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div>
                    <a href="notifications.html" class="w-full  text-[14px] flex justify-start gap-2 p-3">
                      <svg class="h-4 w-4 text-gray-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />  <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>

                      عرض  كل الرسائل
                    </a>
                  </div>
                </div>
              </div>
              <!-- notification component -->
              <div class="relative " x-data="{showNotifications:false,toggle(){hideOthers(),this.showNotifications = !this.showNotifications}}">
                <div @click.prevent="toggle()" class="topNotMessCallable flex flex-row cursor-pointer truncate p-2  rounded" :class="showNotifications && 'bg-body'">
                    <div class="flex flex-row-reverse mr-2 lt:ml-2 w-full">
                        <div slot="icon" class="relative">
                            <div class="absolute text-xs rounded-full -mt-1 -mr-3 ltr:-mr-2 px-1 font-bold top-0 right-0 bg-red-700 text-white">3</div>
                            <svg class="h-5 w-5 md:h-7 md:w-7 text-gray-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />  <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>
                        </div>
                    </div>
                </div>
                <div x-show="showNotifications" class="topNotMess absolute w-[22rem] -left-28 md:left-0 mt-1 drop-shadow-md rounded-b border-t-0 z-10 bg-white">
                    <!-- notifications inside  -->
                  <div class="h-52 overflow-y-scroll">
                      <!-- notification item -->
                      <div class="border-b p-3 flex flex-row items-start ">
                        <div class="border p-1 w-[56px]  ">
                          <img data-src="https://via.placeholder.com/150" alt="Placeholder image" class=" lozad h-full w-full">
                        </div>
                        <div class="mr-4 lt:ml-4" style="width:calc(100% - 56px)">
                          <a href="" class="text-[13px] text-gray-700 hover:text-primaryTextColor">تم اضافة عرض على طلبك من قبل  عياط.</a>
                          <div class="flex items-center gap-1 text-[13px] ">
                            <svg class="h-4 w-4 text-gray-400 mt-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>منذ 30 دقيقة</span>
                          </div>
                        </div>
                      </div>
                      <!-- notification item -->
                      <div class="border-b p-3 flex flex-row items-start gap-2">
                        <div class="border p-1  w-[56px] ">
                          <img data-src="https://via.placeholder.com/150" alt="Placeholder image" class=" lozad h-full w-full">
                        </div>
                        <div class="mr-4 lt:ml-4" style="width:calc(100% - 56px)">
                          <a href="" class="text-[13px] text-gray-700 hover:text-primaryTextColor">تم اضافة عرض على طلبك من قبل  عياط والمحتوى يب مواثق كم مكشسي على سحبسب
                            .</a>
                          <div class="flex items-center gap-1 text-[13px] ">
                            <svg class="h-4 w-4 text-gray-400 mt-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>منذ 30 دقيقة</span>
                          </div>
                        </div>
                      </div>
                      <!-- notification item -->
                      <div class="border-b p-3 flex flex-row items-start ">
                        <div class="border p-1 w-[56px]  ">
                          <img data-src="https://via.placeholder.com/150" alt="Placeholder image" class=" lozad h-full w-full">
                        </div>
                        <div class="mr-4 lt:ml-4" style="width:calc(100% - 56px)">
                          <a href="" class="text-[13px] text-gray-700 hover:text-primaryTextColor">تم اضافة عرض على طلبك من قبل  عياط.</a>
                          <div class="flex items-center gap-1 text-[13px] ">
                            <svg class="h-4 w-4 text-gray-400 mt-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>منذ 30 دقيقة</span>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div>
                    <a href="notifications.html" class="w-full  text-[14px] flex justify-start gap-2 p-3">
                      <svg class="h-4 w-4 text-gray-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />  <path d="M13.73 21a2 2 0 0 1-3.46 0" /></svg>

                      عرض  كل الاشعارات
                    </a>
                  </div>
                </div>
              </div>
              <!-- user component -->
              <div class="relative rounded-md" :class="{showUserDropDown:'bg-body'}" x-data="{showUserDropDown:false,toggle(){hideOthers(),this.showUserDropDown = !this.showUserDropDown}}">
                <div  @click.prevent="toggle()" class="topNotMessCallable flex flex-row cursor-pointer truncate p-2 rounded" :class="showUserDropDown && 'bg-body'" >
                    <div class="flex flex-row-reverse w-full">
                        <div slot="icon" class="relative">
                            <img src="{{asset('assets/images/team/profil_picture_2.jpeg')}}" alt="user-logo" class="h-6 w-6 md:h-8 md:w-8 rounded-full border">
                        </div>
                    </div>
                </div>
                <div x-show="showUserDropDown" class="topNotMess w-max absolute  left-0 mt-1 drop-shadow-md rounded-b border-t-0 z-10 bg-white">
                    <!-- notifications inside  -->
                  <div class="py-3 text-gray-700">
                      <a    href="{{route('dashboard')}}"   class="flex  items-center gap-2 p-2 px-4 text-sm"           >
                        <svg class="h-5 w-5 text-gray-600 "  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="13" r="2" />  <line x1="13.45" y1="11.55" x2="15.5" y2="9.5" />  <path d="M6.4 20a9 9 0 1 1 11.2 0Z" /></svg>
                         <span> {{trans('frontend.dashboard')}} </span>
                      </a>
                      <a    href="{{route('my_services')}}"   class="flex  items-center gap-2 p-2 px-4 text-sm"           >
                        <svg class="h-5 w-5 text-gray-600"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                         <span> {{trans('frontend.my_services')}}  </span>
                      </a>
                      <a    href="{{route('personal_data')}}"   class="flex  items-center gap-2 p-2 px-4 text-sm"           >
                        <svg class="h-5 w-5 text-gray-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="4" width="6" height="5" rx="2" />  <rect x="4" y="13" width="6" height="7" rx="2" />  <rect x="14" y="4" width="6" height="7" rx="2" />  <rect x="14" y="15" width="6" height="5" rx="2" /></svg>
                         <span> {{trans('frontend.my_account')}} </span>
                      </a>
                      <a    href="my_favorites.html"   class="flex  items-center gap-2 p-2 px-4 text-sm"           >
                        <svg class="h-5 w-5 text-gray-600"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M12 20l-7 -7a4 4 0 0 1 6.5 -6a.9 .9 0 0 0 1 0a4 4 0 0 1 6.5 6l-7 7" /></svg>
                        <span> {{trans('frontend.favorites')}}  </span>
                      </a>
                      <a    href="{{route('pay_commission')}}"   class="flex  items-center gap-2 p-2 px-4 text-sm"           >
                        <svg class="h-5 w-5 text-gray-600"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                        </svg>
                        
                         <span> {{trans('frontend.ballance')}}  </span>
                      </a>
                      <form class="flex  items-center gap-2 p-2 px-4 text-sm" action="{{ route('logout') }}" method="POST">
                          @csrf
                          <svg class="h-5 w-5 text-gray-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />  <polyline points="16 17 21 12 16 7" />  <line x1="21" y1="12" x2="9" y2="12" /></svg>
                          <button type="submit">{{trans('auth.sign_out')}}</button>
                      </form>
                  </div>
                </div>
              </div>
              <div class="dropdown hidden md:block" x-data="{dropOpen:false}" >
                <button class="w-full flex justify-between items-center gap-2 bg-white  text-gray-700  p-1 text-[13px] border-1" @click="dropOpen = !dropOpen">
                  <div class="flex justify-start gap-2 items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 192.756 192.756"><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M0 0h192.756v192.756H0V0z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M184.252 156.166V36.62H8.537v119.546h175.715z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#33a457" d="M96.502 156.137V36.589H8.504v119.548h87.998z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#cc2229" d="M118.932 93.49l11.347 3.584-11.351 3.738.222 12.086-7.142-9.802-11.112 3.658 6.836-9.58-6.839-9.318 11.007 3.48 6.698-9.125.334 11.279z"/><path d="M127.129 115.793c-4.4 3.689-10.205 5.902-16.393 5.902-13.997 0-25.343-11.361-25.343-25.377 0-14.014 11.347-25.375 25.343-25.375 6.211 0 12.059 2.218 16.467 5.931-5.578-6.741-13.846-11.056-23.271-11.056-16.795 0-30.412 13.633-30.412 30.451 0 16.816 13.617 30.449 30.412 30.449 9.371.001 17.619-4.251 23.197-10.925z" fill-rule="evenodd" clip-rule="evenodd" fill="#cc2229"/><path fill="none" stroke="#000" stroke-width=".497" stroke-miterlimit="2.613" d="M184.252 156.166V36.62H8.537v119.546h175.715z"/></svg>
                  العربية  
                  </div>
                </button>
                <div @click.outside="dropOpen = false" class="absolute  bg-white border  dropdown-content min-w-[4rem] text-right ltr:text-left z-36 flex flex-col" x-show="dropOpen">
                  <a  @click="dropOpen = !dropOpen" href="#" class="text-sm text-gray-900 flex justify-start items-center gap-2 p-2 border-b hover:bg-body">
                    <svg class="h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 192.756 192.756"><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M0 0h192.756v192.756H0V0z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M184.252 149.619V43.135H8.504v106.484h175.748z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#33348e" d="M184.252 149.619V43.135H8.504v106.484h175.748z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M116.75 149.619v-37.152h67.502v-32.18H116.75V43.135H75.058v37.152H8.504v32.18h66.554v37.152h41.692z"/><path fill="#fff" d="M29.907 43.135l154.345 93.521v12.965H163.23L8.504 55.869V43.135h21.403z"/><path fill="#fff" d="M162.85 43.135L8.504 136.656v12.965h21.023l154.725-93.752V43.135H162.85z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#cc2229" d="M184.252 86.106H109.09V43.135H83.738v42.971H8.504v20.542h75.234v42.971h25.352v-42.971h75.162V86.106z"/><path fill="#cc2229" d="M8.584 43.135l61.055 37.152H55.936L8.504 51.424v-8.289h.08zM8.504 149.434v.187h13.394l53.16-32.348v-4.806h-5.805L8.504 149.434zM184.252 149.621v-7.762l-48.303-29.392h-13.703l61.059 37.154h.947zM169.764 43.135l-53.014 32.26v4.892h5.662l61.055-37.152h-13.703z"/></svg>
                    English
                  </a>
                  <a  @click="dropOpen = !dropOpen" href="#"  class=" text-sm text-gray-900 flex justify-start items-center gap-2 p-2 hover:bg-body">
                    <svg  class="h-5 w-5 text-gray-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 216.504 128.088"><path fill-rule="evenodd" clip-rule="evenodd" fill="#fff" d="M216.252 127.836V.252h-216v127.584h216z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#27569f" d="M71.748 127.836V.252H.252v127.584h71.496z"/><path fill-rule="evenodd" clip-rule="evenodd" fill="#cc2136" d="M216.252 127.836V.252h-71.496v127.584h71.496z"/><path fill="none" stroke="#000" stroke-width=".504" stroke-miterlimit="2.613" d="M216.252 127.836V.252h-216v127.584h216z"/></svg>
                    Francais
                  </a>
                </div>
              </div> 
              @endguest
              <!--  button -->
              <button @click="open = !open" class=" p-3 pt-2">
                <svg x-show="!open" class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                <svg x-show="open" class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
              </button>
              <div class="fixed inset-0 z-10 bg-gray-900 opacity-50 h-screen " x-show="open" @click="open = false"></div>
            </div>
            <!-- <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
             <a
                href="signin.html"
                class="loginBtn flex items-start gap-1 py-3 px-7 text-sm font-medium text-primaryTextColor hover:text-primary hover:text-base"
              >
              <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />  <line x1="15" y1="9" x2="20" y2="4" />  <polyline points="15 5 15 9 19 9" /></svg>
                <span >Call Now</span>
              </a>
              <a
                href="signup.html"
                class="signUpBtn rounded-full bg-white  border-primary py-1 px-3 text-sm leading-10 font-medium text-primary duration-300 ease-in-out bg-opacity-90 hover:bg-opacity-100 hover:bg-primary hover:text-white"
              >
                احجز استشارة
              </a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Navbar Section End -->