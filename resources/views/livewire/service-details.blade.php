<section class="px-4 md:px-8 bg-body text-gray-800 relative overflow-hidden  pb-16" >
    <!-- filter in popup -->

    <div class="md:flex justify-between gap-8 space-x-2">
      <!-- right side -->
      <div class="w-full md:w-2/3 grid grid-cols-1 gap-8">
        <!-- project progress -->
        <div class="bg-white p-4 px-6 md:px-12">
        
          <div
            class="relative after:absolute after:inset-x-0 after:top-1/2 after:block after:h-0.5 after:-translate-y-1/2 after:rounded-lg after:bg-gray-100"
          >
            <ol
              class="relative z-10 md:flex justify-between text-sm font-medium text-gray-500"
            >, 
              <li class="flex items-center gap-3 md:gap-2 bg-white p-2">
                <span
                  class="h-7 w-7  rounded-full @if($second_step) bg-primaryTextColor @else bg-gray-100 @endif flex items-center"
                >
                  <svg class="h-5 w-5 text-white m-auto"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 12l5 5l10 -10" /></svg>
                </span>
        
                <span class="block"> {{trans('frontend.publish_project_step')}}  </span>
              </li>
        
              <li class="flex items-center gap-3 md:gap-2 bg-white p-2">
                <span
                  class="h-7 w-7  rounded-full  @if($second_step) bg-primaryTextColor @else  bg-gray-100 @endif flex items-center"
                >
                <svg class="h-5 w-5 text-white m-auto"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="15 18 9 12 15 6" /></svg>
                </span>
        
                <span class="block">{{trans('frontend.receiving_offers_step')}} </span>
              </li>
        
              <li class="flex items-center gap-3 md:gap-2 bg-white p-2">
                <span
                  class="h-7 w-7 rounded-full  @if($third_step) bg-primaryTextColor @else  bg-gray-100 @endif text-center text-[10px] font-bold leading-6"
                >
                <svg class="h-5 w-5 text-white m-auto"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="15 18 9 12 15 6" /></svg>
                </span>
        
                <span class="block"> {{trans('frontend.processing_project')}}</span>
              </li>
              <li class="flex items-center gap-3 md:gap-2 bg-white p-2">
                <span
                  class="h-7 w-7 rounded-full  @if($fourth_step) bg-primaryTextColor @else  bg-gray-100 @endif bg-gray-100 text-center text-[10px] font-bold leading-6"
                >
                <svg class="h-5 w-5 text-white m-auto"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="15 18 9 12 15 6" /></svg>
                </span>
        
                <span class="block">{{trans('frontend.finished_project')}} </span>
              </li>
            </ol>
          </div>
        </div>
        <!-- project description -->
        <div class="bg-white rounded ">
          <h2 class="border-b p-2 px-6 text-md md:text-base">وصف المشروع</h2>
          <p class="p-6 text-sm leading-8">
            تصميم متجري علي شوبيفاي وتهيئة الموقع للبدء في البيع ووضع خمس منتجات متخصص في بيع النظارات الشمسيه ومنتجات الأعمال الفنية اليدوية خرز
          </p>
        </div>
        <!-- project skills -->
        <div class="bg-white rounded ">
          <h2 class="border-b p-2 px-6 text-md md:text-base">المهارات المطلوبة</h2>
          <div class="mt-4 mb-6 p-2 px-6 flex flex-wrap justify-start items-center gap-2">
            <a href="portfolios.html" class="bg-primaryTextColor text-white text-[14px] rounded p-1 px-2">هندسة برمحيات   </a>
            <a href="portfolios.html" class="bg-primaryTextColor text-white text-[14px] rounded p-1 px-2">تصميم   </a>
            <a href="portfolios.html" class="bg-primaryTextColor text-white text-[14px] rounded p-1 px-2">جديد   </a>
          </div>
        </div>
        <!-- add offer form-->
        <div class="bg-white rounded">
          <h2 class="border-b p-2 px-6 text-md md:text-base">تقديم عرض جديد</h2>
          <form class="mt-4 mb-6 p-2 px-6 ">
            <!-- price + duration -->
            <div class="project-budget mb-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 items-center"> 
              <!-- price -->
              <div class="">
                <label for="project-budget" class=" my-2 flex">
                  <span>قيمة العرض</span>
                  <span class="text-red-600 text-xl font-bold mr-2">*</span>
                </label>
                <div class="flex itmes-center">
                  <input type="number" class="white-input-theme w-10/12" style="p-2" id="offer-price""  value="">
                  <span class="bg-body w-2/12 text-center leading-[2rem] border-l border-y border-gray-400">€</span>
  
                </div>
              </div>
              <!-- duration  -->
              <div class="">
                <label for="project-budget" class=" my-2 flex">
                  <span>مدة التسليم</span>
                  <span class="text-red-600 text-xl font-bold mr-2">*</span>
                </label>
                <div class="flex itmes-center">
                  <input type="number" class="white-input-theme w-10/12" id="project-duration" value="">
                  <span class="bg-body w-2/12 text-center leading-[2rem] border-l border-y border-gray-400">أيام</span>
  
                </div>
              </div>
              <div class="">
                <label for="project-budget" class=" my-2 mt-3 block ">
                  <span>مستحقاتك</span>
                </label>
                <div class="flex itmes-center">
                  <input type="number" disabled class="white-input-theme w-10/12"  value="205 ">
                  <span class="bg-body w-2/12 text-center leading-[2rem] border-l border-y border-gray-400">€</span>
  
                </div>
              </div>
            </div>
            <div class="description mt-8 mb-5">
              <label for="description" class=" my-2 flex">
                <span>وصف المشروع</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <textarea class="white-input-theme w-full" name="description" id="description" rows="10"></textarea>
            </div>
            <!-- file uploader -->
            <div x-data="dataFileDnD()" class="relative flex flex-col p-4 text-gray-400 border border-gray-200 rounded">
                <div x-ref="dnd"
                    class="relative flex flex-col text-gray-400 border border-gray-200 border-dashed rounded cursor-pointer">
                    <input accept="*" type="file" multiple
                        class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                        @change="addFiles($event)"
                        @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                        @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                        @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                        title="" />

                    <div class="flex items-center gap-2 justify-start py-4 ">
                        <svg class="w-12 h-12 mr-1 text-current-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <div class="">
                          <h2 class="text-smd text-gray-800">اسحب الملفات الى هنا</h2>
                          <p class="text-sm m-0">أو انقر للاختيار اليدوي</p>
                        </div>
                    </div>
                    
                </div>

                <template x-if="files.length > 0">
                    <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6" @drop.prevent="drop($event)"
                        @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                        <template x-for="(_, index) in Array.from({ length: files.length })">
                            <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                                style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                                :class="{'border-blue-600': fileDragging == index}" draggable="true" :data-index="index">
                                <button class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                                    <svg class="w-4 h-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                                <template x-if="files[index].type.includes('audio/')">
                                    <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                    </svg>
                                </template>
                                <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                                    <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                </template>
                                <template x-if="files[index].type.includes('image/')">
                                    <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                        x-bind:src="loadFile(files[index])" />
                                </template>
                                <template x-if="files[index].type.includes('video/')">
                                    <video
                                        class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                                        <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                                    </video>
                                </template>

                                <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                    <span class="w-full font-bold text-gray-900 truncate"
                                        x-text="files[index].name">Loading</span>
                                    <span class="text-xs text-gray-900" x-text="humanFileSize(files[index].size)">...</span>
                                </div>

                                <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                                    @dragleave="fileDropping = null"
                                    :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                                </div>
                            </div>
                        </template>
                    </div>
                </template>
            </div>
            <!-- offer help -->
            <ul class="list-disc mt-8 px-5 text-sm leading-7">
              <li>تجنب وضع وسائل تواصل خارجية</li>
              <li>لاتضع روابط خارجية ، قم بالاهتمام <a href="" class="underline underline-offset-2 text-primaryTextColor">بمعرض أعمالك</a> بدلا منها</li>
              <li><a href="" class="underline underline-offset-2 text-primaryTextColor">اقرأ هنا كيف تضيف عرض مميز على مشروع</a></li>
            </ul>
              <!-- submit form -->
            <div class="mt-8 inline-block text-center">
              <button class="bg-primaryTextColor  text-smd md:text-base text-white font-bold py-1 px-4 w-full rounded hover:bg-primaryTextColorDarken">أضف عرضك</button>
            </div>
          </form>
        </div>
         <!-- offers list -->
        <div class="bg-white rounded " x-data="offersListDropdown()">
          <h2  class="border-b p-2 px-6 text-md md:text-base flex justify-between  items-center">
            <span>العروض المقدمة</span>
            <!-- filters -->
            <div class="flex justify-between items-center gap-2">
              <select class=" filter-input " >
                <option value="" selected>تلقائي</option>
                <option value="newest" >الأحدث</option>
                <option value="oldest" >الأقدم</option>
              </select>
              <div @click="toggle()" class="cursor-pointer">
                <svg class="h-5 w-5" x-show="!isOffersListOpen"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 9 12 15 18 9" /></svg>
                <svg class="h-5 w-5" x-show="isOffersListOpen"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 15 12 9 18 15" /></svg>
              </div>
            </div>
          </h2>
          <div class="mt-4 " >
              <!-- professional single card -->
              <div class="border-b pb-6 p-2 px-6 ">
                <div class="flex items-start md:items-center gap-x-3 mb-2  py-6 rounded ">
                  <!-- image -->
                  <div class="w-16 h-16 md:w-1/12 mt-2 md:mt-0 ">
                    <img src="https://via.placeholder.com/150" alt="Profile picture" class="w-full h-full rounded-full">
                  </div>
                  <div class="flex-1">
                    <!-- name + dropdown actions -->
                    <div class="flex items-center justify-between">
                      <a href="professional_details.html" class="text-md md:text-base  text-primaryTextColor">
                        احمد امين عياط
                      </a>
                       <!-- dropdown actions -->
                      <div class="flex items-center ">

                        <div x-data="{ dropdownOpen: false }" class="relative">
                          <button @click="dropdownOpen = !dropdownOpen" class="flex justify-center items-center gap-1 bg-zinc-100 px-2 py-1 border border-gray-300 text-sm text-gray-600 focus:outline-none focus:bg-white">
                            <svg class="h-4 w-4 text-current"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            
                            <span>خيارات</span>
                          </button>


                          <div x-show="dropdownOpen" class="absolute left-0 border mt-2 w-36 bg-white rounded overflow-hidden shadow-xl z-20">
                            <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-800 border-b hover:bg-gray-200">
                              <svg class="h-5 w-5 text-gray-600 "  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="5" x2="5" y2="21" />  <line x1="19" y1="5" x2="19" y2="14" />  <path d="M5 5a5 5 0 0 1 7 0a5 5 0 0 0 7 0" />  <path d="M5 14a5 5 0 0 1 7 0a5 5 0 0 0 7 0" /></svg>
                              <span>تبليغ كمخالف</span>

                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-gray-600 text-sm md:text-md my-1 flex justify-start gap-x-8 items-center">
                      <!-- rating box -->
                      <div class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="flex items-center gap-1 text-sm ">
                      <svg class="h-4 w-4 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                      </svg>
                      <span>منذ 30 دقيقة</span>
                    </div>
                
                  </div>
                
                </div>
                <!-- comment -->
                <p class="text-sm md:text-smd mt-2">
                  السلام عليكم و رحمة الله تعالى
                  حياك الله اخي معك اسامة  من الجزائر مبرمج مواقع الكترونية لدي خبرة في برمجة و تطوير المواقع بما فيها المواقع ا...
                </p>
              </div>
              <div class="border-b pb-6 p-2 px-6 ">
                <div class="flex items-start md:items-center gap-x-3 mb-2  py-6 rounded ">
                  <div class="w-16 h-16 md:w-1/12 mt-2 md:mt-0 ">
                    <img src="https://via.placeholder.com/150" alt="Profile picture" class="w-full h-full rounded-full">
                  </div>
                  <div class="flex-1">
                    <div class="flex items-center justify-between">
                      <a href="professional_details.html" class="text-md md:text-base text-primaryTextColor">
                        احمد امين عياط
                      </a>
                      <!-- component -->
                      <!-- dropdown actions -->
                      <div class="flex items-center ">

                        <div x-data="{ dropdownOpen: false }" class="relative">
                          <button @click="dropdownOpen = !dropdownOpen" class="flex justify-center items-center gap-1 bg-zinc-100 px-2 py-1 border border-gray-300 text-sm text-gray-600 focus:outline-none focus:bg-white">
                            <svg class="h-4 w-4 text-current"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            
                            <span>خيارات</span>
                          </button>


                          <div x-show="dropdownOpen" class="absolute left-0 border mt-2 w-36 bg-white rounded overflow-hidden shadow-xl z-20">
                            <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-800 border-b hover:bg-gray-200">
                              <svg class="h-5 w-5 text-gray-600 "  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="5" y1="5" x2="5" y2="21" />  <line x1="19" y1="5" x2="19" y2="14" />  <path d="M5 5a5 5 0 0 1 7 0a5 5 0 0 0 7 0" />  <path d="M5 14a5 5 0 0 1 7 0a5 5 0 0 0 7 0" /></svg>
                              <span>تبليغ كمخالف</span>

                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-gray-600 text-sm md:text-md my-1 flex justify-start gap-x-8 items-center">
                      <!-- rating box -->
                      <div class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="flex items-center gap-1 text-sm ">
                      <svg class="h-4 w-4 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                      </svg>
                      <span>منذ 30 دقيقة</span>
                    </div>
                
                  </div>
                
                </div>
                <!-- comment -->
                <p class="text-sm md:text-smd mt-2">
                  السلام عليكم و رحمة الله تعالى
                  حياك الله اخي معك اسامة  من الجزائر مبرمج مواقع الكترونية لدي خبرة في برمجة و تطوير المواقع بما فيها المواقع ا...
                </p>
              </div>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/3">
        <!-- project details -->
        <div class="bg-white rounded  pb-4 mb-4">
          <h2 class="border-b p-2 px-6 text-md md:text-base ">بطاقة المشروع</h2>

          <div class="flex justify-between gap-2 px-6 py-2 pt-6 text-sm">
            <span  class="w-1/2"> حالة المشروع</span>
            <div class="w-1/2">
              <span class=" bg-primaryTextColor text-white w-auto px-1">قيد التنفيذ</span>
            </div>
          </div>
          <div class="flex justify-between gap-2 px-6 py-2  text-sm">
            <span  class="w-1/2"> تاريخ النشر</span>
            <span class="w-1/2 ">منذ ساعة </span>
          </div>
          <div class="flex justify-between gap-2 px-6 py-2  text-sm">
            <span  class="w-1/2"> الميزانية</span>
            <span class="w-1/2 ">230 - 300 € </span>
          </div>
          <div class="flex justify-between gap-2 px-6 py-2  text-sm">
            <span  class="w-1/2"> مدة التنفيذ</span>
            <span class="w-1/2 ">أسبوع واحد</span>
          </div>
          <div class="flex justify-between gap-2 px-6 py-2  text-sm">
            <span  class="w-1/2"> عدد العروض</span>
            <span class="w-1/2 ">3<span>
          </div>
          <div class="flex justify-between gap-2 px-6 py-2 pb-6 text-sm">
            <span  class="w-1/2"> متوسط العروض</span>
            <span class="w-1/2 ">200€<span>
          </div>
          <!-- project owner -->
          <div class="border-t p-2 px-6 ">
            <span>صاحب المشروع</span>
            <div class="flex items-start md:items-center gap-x-3 mb-2 py-2 rounded ">
              <div class="w-16 h-16  mt-2 md:mt-0 ">
                <img src="https://via.placeholder.com/150" alt="Profile picture" class="w-full h-full rounded-full">
              </div>
              <div class="flex-1">
                <div class="flex items-center justify-between">
                  <a href="professional_details.html" class="text-smd mx-1">
                    احمد امين عياط
                  </a>
                </div>
                <div class="flex items-center gap-1 text-sm ">
                  <svg class="h-6 w-6 text-gray-500" fill="#6b6666" width="64px" height="64px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" stroke="#6b6666"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><circle cx="44.6" cy="36.2" r="16.1"></circle><path d="M48.8,79.6c2.8,0,1.2-1.9,1.2-1.9h0a19.22,19.22,0,0,1-4.2-12,18.65,18.65,0,0,1,1.7-7.9l.2-.4a1.17,1.17,0,0,0-.9-1.9h0a17.7,17.7,0,0,0-2.3-.1A24.35,24.35,0,0,0,20.4,76.3c0,1.2.4,3.5,4.2,3.5H48.3C48.7,79.6,48.7,79.6,48.8,79.6Z"></path><path d="M65.3,51.2A14.25,14.25,0,1,0,79.5,65.5,14.25,14.25,0,0,0,65.3,51.2Zm0,4.5a3.22,3.22,0,0,1,3.2,3.2,3.06,3.06,0,0,1-.7,2l2.3,4.3c.1.2,0,.4-.2.4a2.7,2.7,0,0,0-1.1.5c-.2.1-.4,0-.4-.1l-2.2-4.1a3.08,3.08,0,0,1-.9.1,3.22,3.22,0,0,1-3.2-3.2A3.08,3.08,0,0,1,65.3,55.7Zm-2,8.2L61.1,68a3.26,3.26,0,0,1,1,2.3,3.2,3.2,0,1,1-3.2-3.2h.4l2.3-4.3c.1-.2.2-.2.5-.1a2.87,2.87,0,0,0,1.1.6C63.3,63.7,63.4,63.9,63.3,63.9Zm8.3,9.8a3.29,3.29,0,0,1-3-1.9H64.2c-.2,0-.4-.2-.2-.4a2.48,2.48,0,0,0,.1-.9v-.2c0-.2.1-.4.2-.4h4.2a3.12,3.12,0,0,1,3.1-2.6,3.22,3.22,0,0,1,3.2,3.2A3.44,3.44,0,0,1,71.6,73.7Z"></path></g></svg>
                  <span>مدير تدريب</span>
                </div>
            
              </div>
            
            </div>
          </div>
        </div>
        <!-- share projec -->
        <div class="bg-white rounded ">
          <h2 class="border-b p-2 px-6 text-md md:text-base">شارك المشروع</h2>
          <div class="flex flex-wrap justify-center gap-2 px-6 py-6 text-sm">
            <!-- facebook -->
            <button title="facebook" class="bg-blue-500 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
              <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" /></svg>
            </button>
            <!-- twitter -->
            <button title="twitter" class="bg-blue-400 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
              <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" /></svg>
            </button>
            <!-- linkedin -->
            <button title="linkedin" class="bg-blue-700 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
              <svg class="h-5 w-5 fill-current"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />  <rect x="2" y="9" width="4" height="12" />  <circle cx="4" cy="4" r="2" /></svg>
            </button>
            <!-- whatsapp -->
            <button title="whatsapp" class="bg-[#25D366] p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
              <svg class="h-5 w-5 fill-current"  width="64px" height="64px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1-.48.6-.59.73-.21.14-.4 0a5.13 5.13 0 0 1-1.49-.92 5.25 5.25 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.39 1.39 0 0 0 .18-.31.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23 2.1 2.1 0 0 0-.65 1.55A3.59 3.59 0 0 0 5 8.2 8.32 8.32 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.53 2.53 0 0 0 1.17.07 1.93 1.93 0 0 0 1.26-.88 1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21z"></path><path d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85 3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72zM8 14.12a6.12 6.12 0 0 1-3.15-.87l-.22-.13-2.34.61.62-2.28-.14-.23a6.18 6.18 0 0 1 9.6-7.65 6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12z"></path></g></svg>
            </button>
            <!-- copy paste -->
            <button title="copy paste" class="bg-gray-400 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
              <svg class="h-5 w-5 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="8" y="8" width="12" height="12" rx="2" />  <path d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2" /></svg>
            </button>
    
    
          </div>
        </div>
      </div>
    </div>
  </section>