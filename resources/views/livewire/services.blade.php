<section id="search-filter" class="px-4 md:px-8 bg-body text-gray-700 relative overflow-hidden  pb-16" >
    <!-- filter in popup -->

    <div class="md:flex justify-between  gap-8 space-x-2">
      <!-- left side -->
        <div class="hidden md:block w-full md:w-3/12 shadow-md border p-5 rounded bg-white">

          <div class="relative">
           <a href="#" class="absolute flex items-center mr-2 ltr:ml-2 h-full text-primaryTextColor">
              <svg class="w-5 h-5 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z"></path>
              </svg>
            </a>
      
           <input type="text" wire:model.debounce.1000ms="search" class="w-full rounded pr-10 ltr:pl-10 bg-input border border-gray-300 px-4 py-2 text-sm text-gray-500 focus:outline-none focus-visible:ring-1  focus-visible:ring-primary ring-inset focus:text-gray-900 focus-visible:font-bold" placeholder="{{trans('frontend.enter_search_word')}}" />
          </div>
      
      
          <div>
            <!-- speciality -->
            <div class=" border-b py-3 ">
                <label class="ml-2 text-gray-600 font-semibold  flex justify-between">
                  <span class="text-md">{{trans('frontend.category')}}</span>
                  <!-- show categories modal -->
                  <div x-data="{ showCatModel : false }">
                    <!-- Button -->
                    <a wire:click.prevent="$set('render_all_jobs',true)" @click.prevent="showCatModel = !showCatModel" href="#" class="underline text-sm text-primaryTextColor">{{trans('frontend.show_all_categories')}}</a>
            
                    <!-- Modal Background -->
                    <div x-show="showCatModel" @click.self="showCatModel = !showCatModel" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-37 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <!-- Modal -->
                        <div x-show="showCatModel" class="bg-white rounded-xl shadow-2xl p-6 w-full md:w-10/12 md:mx-10" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-8 pb-16 auto-rows-min grid-auto-rows-min">
                            @php
                                
                              $random_bg= ['bg-green-400','bg-blue-400','bg-red-400','bg-yellow-600','bg-orange-400',
                              'bg-amber-400','bg-emerald-300','bg-emerald-600','bg-teal-400','bg-cyan-400','bg-indigo-400']
                            @endphp
                            @if($specialities && count($specialities))
                            @foreach ($specialities as $sp)
                            
                            <div class="bg-white rounded shadow-lg overflow-hidden ">
                              <div class="{{$random_bg[array_rand($random_bg)]}} text-white flex flex-col items-center justify-center py-2">
                               <img src="{{$sp['image']}}" class="h-12 w-12 mb-2 " alt="">
                                <span class="text-lg font-bold ml-2 mb-2 text-white">{{app()->getLocale() != 'en' ? $sp['title_'.app()->getLocale()] : $sp['title']}}</span>
                              </div>
                              <div class="">
                                <ul class="list-none">
                                  @if($sp['jobs'] && count($sp['jobs']))
                                  @foreach ($sp['jobs']  as $job)
                                      
                                  <li  class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                    <a wire:click.prevent="$set(jobs_categories[{{$job['id']}}],{{$job['id']}})" @click="showCatModel = !showCatModel"  href="" >
                                    {{app()->getLocale() != 'en' ? $job['title_'.app()->getLocale()] : $job['title']}}
                                    </a>
                                  </li>
                                  @endforeach 
                                  @endif
                                  
                                </ul>
                              </div>
                            </div>
                            @endforeach
                            @endif
                          </div>
            
                        </div>
                    </div>
                  </div>
                </label>
                <!-- categories list -->
                <ul class="mt-4">
                  

                  @foreach ($jobs_to_list as $job)
                  <li>
                    <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                      <input type="checkbox" wire:model="jobs_categories.{{$job['id']}}"
                       class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " 
                       value="{{$job['id']}}"
                       ><span class="ml-2 text-gray-700 text-sm">
                        {{app()->getLocale() !='en' ? ((array)$job)['title_'.app()->getLocale()] :$job['title']}}
                      </span>
                    </label>
                  </li>
                  @endforeach
                </ul>
            </div>
            <!-- skills -->
            <div class=" border-b py-3 " >
                <label class="ml-2 text-gray-600 font-semibold text-md">المهارات</label>
                <!-- categories list -->
                <div class="mt-4 mb-6 flex flex-wrap justify-start items-center gap-2">
                  <span class="bg-primaryTextColor text-white text-sm p-1">هندسة برمحيات
                    <span class="mr-1 font-semibold cursor-pointer">X</span>
                  </span>
                  <span class="bg-primaryTextColor text-white text-sm p-1">تصميم
                    <span class="mr-1 font-semibold cursor-pointer">X</span>
                  </span>
                  <span class="bg-primaryTextColor text-white text-sm p-1">جديد
                    <span class="mr-1 font-semibold cursor-pointer">X</span>
                  </span>
                </div>
                <div class="relative my-2">
                  <select class=" filter-input text-gray-600 w-full">
                    <option value="">اختر</option>
                    <option value="course">هندسة برمحيات</option>
                    <option value="for-sale">ikh lihv,</option>
                    <option value="fsdf">مهارة جديدة</option>
                  </select>
                </div>
            </div>
            <!-- other properties -->
            <div class=" py-3 ">
                <label class="ml-2 text-gray-600 font-semibold text-md">مدة التسليم</label>
                <!-- categories list -->
                <ul class="mt-4">
                  <li>
                    <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                      <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">أقل من أسبوع</span>
                    </label>
                  </li>
                  <li>
                    <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                      <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">من 1 إلى 2 أسابيع</span>
                    </label>
                  </li>
                  <li>
                    <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                      <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">من أسبوعين إلى شهر</span>
                    </label>
                  </li>
                  <li>
                    <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                      <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">من شهر إلى 3 شهر</span>
                    </label>
                  </li>
                  <li>
                    <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                      <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">أكثر من 3 شهر</span>
                    </label>
                  </li>
                
                </ul>
            </div>
            <!-- price range -->
            <!-- <div class=" py-3 ">
                <label class="ml-2 text-gray-600 font-semibold text-md">الميزانية</label>
              
                <div x-data="{total_value:25}" class="p-2 ">
                  <input class="w-full" type="range" x-model="total_value" min="25" max="11000" step="50">

                  <div class=" flex justify-between">
                    <span >25</span>
                    <span  x-text="total_value"></span>
                  </div>
                </div>

            </div> -->
          </div>
        </div>
        <!-- right side -->
        <div class="w-full md:w-9/12">
          <!-- result count -->
          <div class="bg-white rounded p-3 md:flex justify-between items-center">
            <h3 class="hidden md:block text-sm md:text-base font-semibold text-gray-600">
              {{trans('frontend.published_services')}} 
              <span class="font-bold text-base text-primaryTextColor mx-1"></span>
            </h3>
           <div class="flex justify-between gap-x-4 items-center">

            <div class="md:hidden"  x-data="{ showFilterModel : false ,toggle() { this.showFilterModel = ! this.showFilterModel } }" class=" overflow-y-scroll">
              <!-- Button -->
              <a href="#" @click.prevent="toggle()">
                <svg class="h-7 w-7 text-gray-500 "  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <line x1="4" y1="21" x2="4" y2="14" />  <line x1="4" y1="10" x2="4" y2="3" />  <line x1="12" y1="21" x2="12" y2="12" />  <line x1="12" y1="8" x2="12" y2="3" />  <line x1="20" y1="21" x2="20" y2="16" />  <line x1="20" y1="12" x2="20" y2="3" />  <line x1="1" y1="14" x2="7" y2="14" />  <line x1="9" y1="8" x2="15" y2="8" />  <line x1="17" y1="16" x2="23" y2="16" /></svg>
              </a>
              <!-- Modal Background -->
              <div  x-show="showFilterModel" @click.self="toggle()" class="fixed text-gray-500 overflow-auto z-37 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                  <!-- Modal -->
                  <div x-show="showFilterModel" class="bg-white rounded-xl shadow-2xl p-6 sm:w-10/12 mx-10" @click.away="showFilterModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                    <div class="block md:hidden w-full md:w-3/12 shadow-md border p-5 rounded bg-white">

                      <div class="relative">
                       <a href="#" class="absolute flex items-center mr-2 ltr:ml-2 h-full text-primaryTextColor">
                          <svg class="w-5 h-5 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z"></path>
                          </svg>
                        </a>
                  
                       <input type="text" class="w-full rounded pr-10 ltr:pl-10 bg-input border border-gray-300 px-4 py-2 text-sm text-gray-500 focus:outline-none focus-visible:ring-1  focus-visible:ring-primary ring-inset focus:text-gray-900 focus-visible:font-bold" placeholder="ابحث عن أي شيء" />
                      </div>
                  
                  
                    <div>
                      <!-- speciality -->
                      <div class=" border-b py-3 ">
                          <label class="ml-2 text-gray-600 font-semibold  flex justify-between">
                            <span class="text-md">الفئة</span>
                            <!-- show categories modal -->
                            <div x-data="{ showCatModel : false }">
                              <!-- Button -->
                              <a @click.prevent="showCatModel = !showCatModel" href="#" class="underline text-sm text-primaryTextColor">عرض كل الأقسام</a>
                      
                              <!-- Modal Background -->
                              <div x-show="showCatModel" @click.self="showCatModel = !showCatModel" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-37 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                  <!-- Modal -->
                                  <div x-show="showCatModel" class="bg-white rounded-xl shadow-2xl p-6 w-full md:w-10/12 mx-6 md mx-10" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-8 pb-16 auto-rows-min grid-auto-rows-min">
                                      <div class="bg-white rounded shadow-lg overflow-hidden ">
                                        <div class="bg-green-400 text-white flex flex-col items-center justify-center py-2">
                                          <svg class="h-8 w-8 text-gray-800"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                          <span class="text-lg font-bold ml-2 text-red-500">مباني وأشغال</span>
                                        </div>
                                        <div class="">
                                          <ul class="list-none">
                                            <li class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                              <a href="#" >مهندس معماري</a>
                                            </li>
                                            <li class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                              <a href="#">مهندس مدني</a>
                                            </li>
                                            <li class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                              <a href="#">مهندس كهرباء</a>
                                            </li>
                                            <li class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                              <a href="#">نجار</a>
                                            </li>
                                            <li class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                              <a href="#">عامل بناء</a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="bg-white rounded shadow-lg overflow-hidden ">
                                        <div class="bg-blue-400 text-white flex flex-col items-center justify-center py-2">
                                          <svg class="h-8 w-8 text-gray-800"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                          </svg>
                                          <span class="text-lg font-bold ml-2 text-red-500">خدمات مصغرة</span>
                                        </div>
                                        <div class="">
                                          <ul class="list-none">
                                            <li class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                              <a href="#" >مونتاج فيديو</a>
                                            </li>
                                            <li class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                              <a href="#">برمجة</a>
                                            </li>
                                            <li class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                              <a href="#">تجارة الكترونية</a>
                                            </li>
                                            <li class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                              <a href="#">مثال هنا</a>
                                            </li>
                                            <li class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                              <a href="#">مثال اخر</a>
                                            </li>
                                            <li class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                              <a href="#">مثال اخر</a>
                                            </li>
                                            <li class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                              <a href="#">مثال اخر</a>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                      
                                  </div>
                              </div>
                            </div>
                          </label>
                          <!-- categories list -->
                          <ul class="mt-4">
                            <li>
                              <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " checked><span class="ml-2 text-gray-700 text-sm">عامل بناء</span>
                              </label>
                            </li>
                            <li>
                              <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">هندسة الطرقات</span>
                              </label>
                            </li>
                            <li>
                              <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">اصلاح المكيفات</span>
                              </label>
                            </li>
                            <li>
                              <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">تهيئة الأراضي</span>
                              </label>
                            </li>
                          </ul>
                      </div>
                      <!-- skills -->
                      <div class=" border-b py-3 ">
                          <label class="ml-2 text-gray-600 font-semibold text-md">المهارات</label>
                          <!-- categories list -->
                          <div class="mt-4 mb-6 flex flex-wrap justify-start items-center gap-2">
                            <span class="bg-primaryTextColor text-white text-sm p-1">هندسة برمحيات
                              <span class="mr-1 font-semibold cursor-pointer">X</span>
                            </span>
                            <span class="bg-primaryTextColor text-white text-sm p-1">تصميم
                              <span class="mr-1 font-semibold cursor-pointer">X</span>
                            </span>
                            <span class="bg-primaryTextColor text-white text-sm p-1">جديد
                              <span class="mr-1 font-semibold cursor-pointer">X</span>
                            </span>
                          </div>
                          <div class="relative my-2">
                            <select class=" filter-input text-gray-600">
                              <option value="">اختر</option>
                              <option value="course">هندسة برمحيات</option>
                              <option value="for-sale">ikh lihv,</option>
                              <option value="fsdf">مهارة جديدة</option>
                            </select>
                          </div>
                      </div>
                      <!-- other properties -->
                      <div class=" py-3 ">
                          <label class="ml-2 text-gray-600 font-semibold text-md">مدة التسليم</label>
                          <!-- categories list -->
                          <ul class="mt-4">
                            <li>
                              <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">أقل من أسبوع</span>
                              </label>
                            </li>
                            <li>
                              <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">من 1 إلى 2 أسابيع</span>
                              </label>
                            </li>
                            <li>
                              <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">من أسبوعين إلى شهر</span>
                              </label>
                            </li>
                            <li>
                              <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">من شهر إلى 3 شهر</span>
                              </label>
                            </li>
                            <li>
                              <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-sm">أكثر من 3 شهر</span>
                              </label>
                            </li>
                           
                          </ul>
                      </div>
                      <!-- price range -->
                      <div class=" py-3 ">
                          <label class="ml-2 text-gray-600 font-semibold text-md">الميزانية</label>
                          <!-- price input -->
                          <div x-data="{total_value:25}" class="p-2 ">
                            <input class="w-full" type="range" x-model="total_value" min="25" max="11000" step="50">
          
                            <div class=" flex justify-between">
                              <span >25</span>
                              <span  x-text="total_value"></span>
                            </div>
                          </div>
          
                      </div>
                    </div>
                    </div>
                    <a href="" class="table text-center mx-auto my-6 px-4 py-2 font-medium text-white bg-primaryTextColor rounded hover:bg-primaryTextColorDarken">تطبيق</a>

                  </div>
              </div>
            </div>
            <div class="flex items-center gap-x-3">
              @professional
              <a href="{{route('service.create')}}" class="sm-button primary-btn">{{trans('frontend.add_your_service')}}</a>
              @endprofessional
            <!-- end filter in popup -->
            <select wire:model="sort" class="filter-input min-w-[5rem] py-[0.3rem] px-1" >
              <option value="" disabled>{{trans('frontend.sort')}}</option>
              <option value="newest" selected>{{trans('frontend.newest')}}</option>
              <option value="oldest">{{trans('frontend.oldest')}}</option>
            </select>
            </div>
           </div>
          </div>
          <!-- results blocks -->
          <section class="mt-6" >
            
            <!-- project item -->
            @forelse($services as $service)
            <div class="flex items-center mb-2 p-4 border rounded bg-white shadow-lg">
              <div class="flex-1">
                <div class="flex items-center justify-between"  x-data="{ showReportModel : false ,toggle() { this.showReportModel = ! this.showReportModel } }" class=" overflow-y-scroll">
                  <a href="{{route('services.show',['service'=>$service->slug])}}" class="text-smd md:text-base  text-primaryTextColor">
                    {{\Illuminate\Support\Str::limit($service->title,80)}}
                  </a>
                 
                  <a href="#"  @click.prevent="toggle()" class="flex items-center justify-center gap-x-2 px-3 py-1 text-sm text-white bg-primaryTextColor rounded hover:bg-primaryTextColorDarken">
                    <svg class="h-4 w-4 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>
                    </svg>
                    <span>{{trans('frontend.report')}}</span>
                  </a>
                  <!-- Modal Background -->
                  <div  x-show="showReportModel" @click.self="toggle()" class="fixed text-gray-500 overflow-auto z-37 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0 h-screen flex items-center" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <div class="w-full md:w-1/3 mx-auto z-20 inset-0">
                      <div class="flex flex-col p-5 rounded-lg shadow bg-white">
                      <div class="flex flex-col items-center text-center">
                        <div class="inline-block p-4 bg-yellow-50 rounded-full">
                        <svg class="w-12 h-12 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.99L19.53 19H4.47L12 5.99M12 2L1 21h22L12 2zm1 14h-2v2h2v-2zm0-6h-2v4h2v-4z"/></svg>
                        </div>
                        <h2 class="mt-2 font-semibold text-gray-800">{{trans('frontend.confirm_report')}}</h2>
                        <div class="p-3 my-5 " style="text-align:initial">
                          <label class="mb-2 block" for="report_description.{{$service->id}}">{{trans('frontend.report_cause')}}</label>
                          <textarea class="white-input-theme " wire:model.defer="report_description.{{$service->id}}" name="" id="report_description.{{$service->id}}"  rows="5"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-600 leading-relaxed">{{trans('frontend.you_confirm_report')}}</p>
                      </div>
                    
                      <div class="flex items-center gap-3 mt-3">
                        <button @click="toggle()" class="flex-1 px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium rounded-md">
                        {{trans('frontend.back')}}
                        </button>
                    
                        <button  wire:click.prevent="$emit('reportService',{{$service->id}})" @click="toggle()" class="flex-1 px-4 py-2 ml-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium rounded-md">
                        {{trans('frontend.confirm')}}
                        </button>
                      </div>
                      </div>
                    </div>   
                  </div>
                </div>
                <!-- project details -->
                <div class=" md:flex justify-start gap-3 p-1 my-3">
                  <div class="flex items-center gap-3 text-sm">
                    <a href="professional_details.html" >
                      <img class="h-10 w-10 rounded-full lozad"
                       data-src="{{$service->client->user->profile_photo_path}}" 
                       data-placeholder-background="#6b7280ff"
                       onerror="this.onerror=null;this.src='{{generate_avatar($service->client->user->first_name)}}'';"
                       width="50" height="50" alt="">
                    </a>
                    <div>
                        <a href="professional_details.html"  class="mb-2 block  hover:text-primaryTextColor">{{$service->client->user->first_name.' '.$service->client->user->last_name}}</a>
                        <div class="flex gap-5 flex-wrap">
                          <div class="flex items-center gap-1 text-sm ">
                            <svg class="h-4 w-4 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>{{$service->created_at->diffForHumans()}}</span>
                          </div>
                          
                          <div class="flex items-center gap-1 text-sm ">
                            <svg class="h-4 w-4 @if($service->timeline_point =='pending') text-yellow-500
                              @else text-green-500 @endif"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>{{trans('frontend.projects.'.$service->timeline_point)}}</span>
                          </div>
                          <div class="flex items-center gap-1 text-sm ">
                            <svg class="h-4 w-4 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                            </svg>
                            <span>{{trans('frontend.offers')}}</span>
                          </div>
                        </div>
                    </div>
                  </div>
                  
                </div>
                <!-- short description -->
                <p class="text-ellipsis overflow-hidden text-md text-black my-3 leading-8 font-Noto-Naskh">
                  <span class="block md:hidden">{{\Illuminate\Support\Str::limit($service->description,100)}}</span>
                 <span class="hidden md:block"> {{\Illuminate\Support\Str::limit($service->description,200)}} </span>           </p>
                
              </div>
            </div>
            @empty
            <x-alert type="info" message="{{trans('frontend.no_item_added_yet',['title'=>trans('frontend.service')])}}" />
            @endforelse
            <!-- pagination -->
            {{$services->links()}}
            
          </section>
        </div>
    </div>
</section>