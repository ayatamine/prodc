<section id="search-filter" class="px-4 md:px-14 bg-body text-gray-700 relative overflow-hidden  pb-16">
    <!-- filter in popup -->

    <div class="md:flex justify-between  gap-8 space-x-2">
        <!-- left side -->
        <div class="hidden md:block w-full md:w-[26%]  shadow-md border p-5 pt-2 rounded bg-white">
            <div class="flex items-center justify-between my-4 text-smd">
                <p class="font-semibold text-md">
                    البحث عن محترفين
                </p>

                <button class=" text-red-400  hover:text-secondaryHover font-medium hover:font-semibold text-smd">
                    مسح الفلاتر
                </button>
            </div>
            <div class="relative">
                <a href="#" class="absolute flex items-center mr-2 ltr:ml-2 h-full text-primaryTextColor">
                    <svg class="w-5 h-5 fill-current text-primary-gray-dark" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z">
                        </path>
                    </svg>
                </a>

                <input type="text" wire:model.debounce.1000ms="search"
                    class="w-full rounded pr-10 ltr:pl-10 bg-input border border-gray-300 px-4 py-2 text-sm text-gray-500 focus:outline-none focus-visible:ring-1  focus-visible:ring-primary ring-inset focus:text-gray-900 focus-visible:font-bold"
                    placeholder="{{trans('frontend.enter_search_word')}}" />
            </div>


            <!-- customize searh wrapper -->
            <div>
                <!-- speciality -->
                <!-- speciality -->
                <div class=" border-b py-3 ">
                    <label class="ml-2 text-gray-600 font-semibold  flex justify-between">
                        <span class="text-md">{{trans('frontend.category')}}</span>
                        <!-- show categories modal -->
                        <div x-data="{ showCatModel : false }">
                            <!-- Button -->
                            <a wire:click.prevent="$set('render_all_jobs',true)"
                                @click.prevent="showCatModel = !showCatModel" href="#"
                                class="underline text-sm text-primaryTextColor">{{trans('frontend.show_all_categories')}}</a>

                            <!-- Modal Background -->
                            <div x-show="showCatModel" @click.self="showCatModel = !showCatModel"
                                class="fixed text-gray-500 flex items-center justify-center overflow-auto z-37 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0"
                                x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <!-- Modal -->
                                <div x-show="showCatModel"
                                    class="bg-white rounded-xl shadow-2xl p-6 w-full md:w-10/12 md:mx-10"
                                    @click.away="showModal = false"
                                    x-transition:enter="transition ease duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-90 translate-y-1"
                                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                    x-transition:leave="transition ease duration-100 transform"
                                    x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                                    <div
                                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-8 pb-16 auto-rows-min grid-auto-rows-min">
                                        @php

                                        $random_bg=
                                        ['bg-green-400','bg-blue-400','bg-red-400','bg-yellow-600','bg-orange-400',
                                        'bg-amber-400','bg-emerald-300','bg-emerald-600','bg-teal-400','bg-cyan-400','bg-indigo-400']
                                        @endphp
                                        @if($specialities && count($specialities))
                                        @foreach ($specialities as $sp)

                                        <div class="bg-white rounded shadow-lg overflow-hidden ">
                                            <div
                                                class="{{$random_bg[array_rand($random_bg)]}} text-white flex flex-col items-center justify-center py-2">
                                                <img src="{{$sp['image']}}" class="h-12 w-12 mb-2 " alt="">
                                                <span
                                                    class="text-lg font-bold ml-2 mb-2 text-white">{{app()->getLocale()
                                                    != 'en' ? $sp['title_'.app()->getLocale()] : $sp['title']}}</span>
                                            </div>
                                            <div class="">
                                                <ul class="list-none">
                                                    @if($sp['jobs'] && count($sp['jobs']))
                                                    @foreach ($sp['jobs'] as $job)

                                                    <li
                                                        class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                                        <a wire:click.prevent="$set(jobs_categories[{{$job['id']}}],{{$job['id']}})"
                                                            @click="showCatModel = !showCatModel" href="">
                                                            {{app()->getLocale() != 'en' ?
                                                            $job['title_'.app()->getLocale()] : $job['title']}}
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
                                    value="{{$job['id']}}"><span class="ml-2 text-gray-700 text-sm">
                                    {{app()->getLocale() !='en' ? ((array)$job)['title_'.app()->getLocale()]
                                    :$job['title']}}
                                </span>
                            </label>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- skills -->
                <!-- <div class=" border-b py-3 ">
                <label class="ml-2 text-gray-600 font-semibold text-md">المهارات</label>
           
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
                  <select class=" white-input-select text-gray-600" style="padding-top: 0;padding: bottom 0;">
                    <option value="">اختر</option>
                    <option value="course">هندسة برمحيات</option>
                    <option value="for-sale">ikh lihv,</option>
                    <option value="fsdf">مهارة جديدة</option>
                  </select>
                </div>
            </div> -->
                <!-- joined at -->
                <!-- <div class=" border-b py-3 ">
              <div class="py-1">
                <details class="group" open>
                  <summary class="flex justify-between items-center  cursor-pointer list-none text-smd font-semibold">
                    <span> تاريخ الانضمام</span>
                    <span class="transition group-open:rotate-180">
                      <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                    </span>
                  </summary>
                  <div class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                    <div class="py-2">

                      <div class="flex items-center my-2">
                        <input id="all" type="radio" name="duration" class="hidden" checked />
                        <label for="all" class="flex items-center cursor-pointer text-sm">
                        <span class="w-5 h-5 inline-block ml-3 ltr:mr-2 rounded-full border border-grey flex-no-shrink"></span>
                        الكل
                        </label>
                      </div>
                      <div class="flex items-center my-2">
                        <input id="last_week" type="radio" name="duration" class="hidden"  />
                        <label for="last_week" class="flex items-center cursor-pointer text-sm">
                        <span class="w-5 h-5 inline-block ml-3 ltr:mr-2 rounded-full border border-grey flex-no-shrink"></span>
                        اخر اسبوع
                        </label>
                      </div>
                      <div class="flex items-center my-2">
                        <input id="last_month" type="radio" name="duration" class="hidden"  />
                        <label for="last_month" class="flex items-center cursor-pointer text-sm">
                        <span class="w-5 h-5 inline-block ml-3 ltr:mr-2 rounded-full border border-grey flex-no-shrink"></span>
                        اخر شهر
                        </label>
                      </div>
                      <div class="flex items-center my-2">
                        <input id="last_3_montth" type="radio" name="duration" class="hidden"  />
                        <label for="last_3_montth" class="flex items-center cursor-pointer text-sm">
                        <span class="w-5 h-5 inline-block ml-3 ltr:mr-2 rounded-full border border-grey flex-no-shrink"></span>
                        اخر 3 أشهر
                        </label>
                      </div>
                      <div class="flex items-center my-2">
                        <input id="last_year" type="radio" name="duration" class="hidden"  />
                        <label for="last_year" class="flex items-center cursor-pointer text-sm">
                        <span class="w-5 h-5 inline-block ml-3 ltr:mr-2 rounded-full border border-grey flex-no-shrink"></span>
                        اخر سنة
                        </label>
                      </div>
                    </div>
                  </d>
                </details>
              </div>
            </div> -->
                <div class=" py-3 ">
                    {{-- <label class="ml-2  text-gray-600 font-semibold text-md">الدولة</label>
                    <select class=" white-input-select mt-3 text-gray-600" style="padding-top: 0;padding: bottom 0;">
                        <option value="">اختر</option>
                        <option value="course">فرنسا</option>
                        <option value="for-sale">بلجيكا</option>
                        <option value="fsdf">الدنمارك</option>
                    </select> --}}
                    <form action="">
                        {{$this->form}}
                    </form>
                </div>
                <div class=" py-3 border-b">
                    <label class="ml-2  text-gray-600 font-semibold text-md">التقييم</label>
                    <div class="flex w-full  justify-center items-center mt-3">
                        <div x-data="
                  {
                    rating: @entangle('stars_count'),
                    hoverRating: 0,
                    ratings: [{'amount': 1, 'label':'نجمة واحدة'}, {'amount': 2, 'label':'نجمتين'}, {'amount': 3, 'label':'3 نجوم'}, {'amount': 4, 'label':'4 نجوم'}, {'amount': 5, 'label':'5 نجوم'}],
                    rate(amount) {
                      if (this.rating == amount) {
                        this.rating = 0;
                      }
                      else this.rating = amount;
                    },
                    currentLabel() {
                       let r = this.rating;
                      if (this.hoverRating != this.rating) r = this.hoverRating;
                      let i = this.ratings.findIndex(e => e.amount == r);
                      if (i >=0) {return this.ratings[i].label;} else {return ''};     
                    }
                  }
                  " class="">
                            <div class="flex space-x-0">
                                <template x-for="(star, index) in ratings" :key="index">
                                    <button @click="rate(star.amount)" @mouseover="hoverRating = star.amount"
                                        @mouseleave="hoverRating = rating" aria-hidden="true" :title="star.label"
                                        class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline p-1 w-10 m-0 cursor-pointer"
                                        :class="{'text-yellow-500': hoverRating >= star.amount, 'text-yellow-400': rating >= star.amount && hoverRating >= star.amount}">
                                        <svg class="w-8 transition duration-150" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </button>

                                </template>
                            </div>
                            <div class="p-2">
                                <template x-if="rating || hoverRating">
                                    <p x-text="currentLabel()"></p>
                                </template>
                                <!-- <template x-if="!rating && !hoverRating">
                      <p>Please Rate!</p>
                    </template> -->
                            </div>

                        </div>
                    </div>
                </div>

                <!-- other properties -->
                <div class=" py-3 ">
                    <label class="ml-2 text-gray-600 font-semibold text-md">خصائص أخرى</label>
                    <!-- categories list -->
                    <ul class="mt-4">
                        <li class="flex justify-start items-center">
                            <label class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox"
                                    class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " checked><span
                                    class="ml-2 text-gray-700 text-sm">هوية موثقة</span>
                            </label>
                            <svg class="h-6 w-6 text-green-600 mr-2 ltr:ml-2 mt-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </li>
                        <li>
                            <label class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox"
                                    class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                    class="ml-2 text-gray-700 text-sm">أضاف عرضا على الخدمات التي اخترتها</span>
                            </label>
                        </li>
                        <li>
                            <label class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox"
                                    class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                    class="ml-2 text-gray-700 text-sm">أقسم بالله على الإلتزام بالميثاق</span>
                            </label>
                        </li>
                        <li>
                            <label class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox"
                                    class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                    class="ml-2 text-gray-700 text-sm">يقدم خصومات خاصة لأعضاء المنصة </span>
                            </label>
                        </li>

                        <li>
                            <label class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox"
                                    class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                    class="ml-2 text-gray-700 text-sm">لديه خدمة مابعد البيع</span>
                            </label>
                        </li>
                        <li class="flex justify-start items-center">
                            <label class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox"
                                    class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                    class="ml-2 text-gray-700 text-sm">متصل الان</span>
                            </label>
                            <span class="h-4 w-4 rounded-full bg-green-500  mr-2 ltr:ml-2 mt-2"></span>

                        </li>
                        <li>
                            <label class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                <input type="checkbox"
                                    class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                    class="ml-2 text-gray-700 text-sm">يقبل البيع بالتقسيط </span>
                            </label>
                        </li>
                        <!-- <li>
                    <label class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                      <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-smd">يعمل بنظام HACCP</span>
                    </label>
                  </li>
                  <li>
                    <label class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                      <input type="checkbox" class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor " ><span class="ml-2 text-gray-700 text-smd">يقبل الرقابة الالكترونية</span>
                    </label>
                  </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- right side -->
        <div class="w-full md:w-[74%]" x-data="{isGrid:true}">
            <!-- result count -->
            <div class="bg-white rounded p-3 flex justify-between items-center">
                <h3 class="text-sm md:text-base font-semibold text-gray-600">
                    {{trans('frontend.professional_list')}}
                    <span class="font-bold text-md text-primaryTextColor mx-1"></span>
                </h3>
                <div class="flex justify-start gap-x-4 items-center">

                    <div class="md:hidden"
                        x-data="{ showFilterModel : false ,toggle() { this.showFilterModel = ! this.showFilterModel } }"
                        class=" overflow-y-scroll">
                        <!-- Button -->
                        <a href="#" @click.prevent="toggle()">
                            <svg class="h-7 w-7 text-gray-500 " viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="4" y1="21" x2="4" y2="14" />
                                <line x1="4" y1="10" x2="4" y2="3" />
                                <line x1="12" y1="21" x2="12" y2="12" />
                                <line x1="12" y1="8" x2="12" y2="3" />
                                <line x1="20" y1="21" x2="20" y2="16" />
                                <line x1="20" y1="12" x2="20" y2="3" />
                                <line x1="1" y1="14" x2="7" y2="14" />
                                <line x1="9" y1="8" x2="15" y2="8" />
                                <line x1="17" y1="16" x2="23" y2="16" />
                            </svg>
                        </a>
                        <!-- Modal Background -->
                        <div x-show="showFilterModel" @click.self="toggle()"
                            class="fixed text-gray-500 overflow-auto z-37 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0"
                            x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            <!-- Modal -->
                            <div x-show="showFilterModel" class="bg-white rounded-xl shadow-2xl p-6 sm:w-10/12 mx-10"
                                @click.away="showFilterModal = false"
                                x-transition:enter="transition ease duration-100 transform"
                                x-transition:enter-start="opacity-0 scale-90 translate-y-1"
                                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                x-transition:leave="transition ease duration-100 transform"
                                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                                x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                                <div class="block md:hidden w-full md:w-3/12 shadow-md border p-5 rounded bg-white">

                                    <div class="relative">
                                        <a href="#"
                                            class="absolute flex items-center mr-2 ltr:ml-2 h-full text-primaryTextColor">
                                            <svg class="w-5 h-5 fill-current text-primary-gray-dark" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.8898 15.0493L11.8588 11.0182C11.7869 10.9463 11.6932 10.9088 11.5932 10.9088H11.2713C12.3431 9.74952 12.9994 8.20272 12.9994 6.49968C12.9994 2.90923 10.0901 0 6.49968 0C2.90923 0 0 2.90923 0 6.49968C0 10.0901 2.90923 12.9994 6.49968 12.9994C8.20272 12.9994 9.74952 12.3431 10.9088 11.2744V11.5932C10.9088 11.6932 10.9495 11.7869 11.0182 11.8588L15.0493 15.8898C15.1961 16.0367 15.4336 16.0367 15.5805 15.8898L15.8898 15.5805C16.0367 15.4336 16.0367 15.1961 15.8898 15.0493ZM6.49968 11.9994C3.45921 11.9994 0.999951 9.54016 0.999951 6.49968C0.999951 3.45921 3.45921 0.999951 6.49968 0.999951C9.54016 0.999951 11.9994 3.45921 11.9994 6.49968C11.9994 9.54016 9.54016 11.9994 6.49968 11.9994Z">
                                                </path>
                                            </svg>
                                        </a>

                                        <input type="text"
                                            class="w-full rounded pr-10 ltr:pl-10 bg-input border border-gray-300 px-4 py-2 text-sm text-gray-500 focus:outline-none focus-visible:ring-1  focus-visible:ring-primary ring-inset focus:text-gray-900 focus-visible:font-bold"
                                            placeholder="ابحث عن أي شيء" />
                                    </div>

                                    <!-- customize searh wrapper -->
                                    <div>
                                        <!-- speciality -->
                                        <div class=" border-b py-3 ">
                                            <label class="ml-2 text-gray-600 font-semibold  flex justify-between">
                                                <span class="text-md">الفئة</span>
                                                <!-- show categories modal -->
                                                <div x-data="{ showCatModel : false }">
                                                    <!-- Button -->
                                                    <a @click.prevent="showCatModel = !showCatModel" href="#"
                                                        class="underline text-sm text-primaryTextColor">عرض كل
                                                        الأقسام</a>

                                                    <!-- Modal Background -->
                                                    <div x-show="showCatModel"
                                                        @click.self="showCatModel = !showCatModel"
                                                        class="fixed text-gray-500 flex items-center justify-center overflow-auto z-37 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0"
                                                        x-transition:enter="transition ease duration-300"
                                                        x-transition:enter-start="opacity-0"
                                                        x-transition:enter-end="opacity-100"
                                                        x-transition:leave="transition ease duration-300"
                                                        x-transition:leave-start="opacity-100"
                                                        x-transition:leave-end="opacity-0">
                                                        <!-- Modal -->
                                                        <div x-show="showCatModel"
                                                            class="bg-white rounded-xl shadow-2xl p-6 w-full md:w-10/12 mx-6 md mx-10"
                                                            @click.away="showModal = false"
                                                            x-transition:enter="transition ease duration-100 transform"
                                                            x-transition:enter-start="opacity-0 scale-90 translate-y-1"
                                                            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                                            x-transition:leave="transition ease duration-100 transform"
                                                            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                                                            x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                                                            <div
                                                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-8 pb-16 auto-rows-min grid-auto-rows-min">
                                                                <div
                                                                    class="bg-white rounded shadow-lg overflow-hidden ">
                                                                    <div
                                                                        class="bg-green-400 text-white flex flex-col items-center justify-center py-2">
                                                                        <svg class="h-8 w-8 text-gray-800" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                                                        </svg>
                                                                        <span
                                                                            class="text-lg font-bold ml-2 text-red-500">مباني
                                                                            وأشغال</span>
                                                                    </div>
                                                                    <div class="">
                                                                        <ul class="list-none">
                                                                            <li
                                                                                class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                                                                <a href="#">مهندس معماري</a>
                                                                            </li>
                                                                            <li
                                                                                class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                                                                <a href="#">مهندس مدني</a>
                                                                            </li>
                                                                            <li
                                                                                class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                                                                <a href="#">مهندس كهرباء</a>
                                                                            </li>
                                                                            <li
                                                                                class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                                                                <a href="#">نجار</a>
                                                                            </li>
                                                                            <li
                                                                                class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                                                                <a href="#">عامل بناء</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="bg-white rounded shadow-lg overflow-hidden ">
                                                                    <div
                                                                        class="bg-blue-400 text-white flex flex-col items-center justify-center py-2">
                                                                        <svg class="h-8 w-8 text-gray-800" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                        </svg>
                                                                        <span
                                                                            class="text-lg font-bold ml-2 text-red-500">خدمات
                                                                            مصغرة</span>
                                                                    </div>
                                                                    <div class="">
                                                                        <ul class="list-none">
                                                                            <li
                                                                                class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                                                                <a href="#">مونتاج فيديو</a>
                                                                            </li>
                                                                            <li
                                                                                class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                                                                <a href="#">برمجة</a>
                                                                            </li>
                                                                            <li
                                                                                class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                                                                <a href="#">تجارة الكترونية</a>
                                                                            </li>
                                                                            <li
                                                                                class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                                                                <a href="#">مثال هنا</a>
                                                                            </li>
                                                                            <li
                                                                                class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                                                                <a href="#">مثال اخر</a>
                                                                            </li>
                                                                            <li
                                                                                class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                                                                                <a href="#">مثال اخر</a>
                                                                            </li>
                                                                            <li
                                                                                class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
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
                                                        <input type="checkbox"
                                                            class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "
                                                            checked><span class="ml-2 text-gray-700 text-sm">عامل
                                                            بناء</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                                                        <input type="checkbox"
                                                            class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                                            class="ml-2 text-gray-700 text-sm">هندسة الطرقات</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                                                        <input type="checkbox"
                                                            class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                                            class="ml-2 text-gray-700 text-sm">اصلاح المكيفات</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="inline-flex items-center mt-3 gap-x-4 cursor-pointer">
                                                        <input type="checkbox"
                                                            class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                                            class="ml-2 text-gray-700 text-sm">تهيئة الأراضي</span>
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
                                        <!-- joined at -->
                                        <div class=" border-b py-3 ">
                                            <div class="py-1">
                                                <details class="group" open>
                                                    <summary
                                                        class="flex justify-between items-center  cursor-pointer list-none text-smd font-semibold">
                                                        <span> تاريخ الانضمام</span>
                                                        <span class="transition group-open:rotate-180">
                                                            <svg fill="none" height="24"
                                                                shape-rendering="geometricPrecision"
                                                                stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="1.5"
                                                                viewBox="0 0 24 24" width="24">
                                                                <path d="M6 9l6 6 6-6"></path>
                                                            </svg>
                                                        </span>
                                                    </summary>
                                                    <div class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                                        <div class="py-2">

                                                            <div class="flex items-center my-2">
                                                                <input id="all" type="radio" name="duration"
                                                                    class="hidden" checked />
                                                                <label for="all"
                                                                    class="flex items-center cursor-pointer text-sm">
                                                                    <span
                                                                        class="w-5 h-5 inline-block ml-3 ltr:mr-2 rounded-full border border-grey flex-no-shrink"></span>
                                                                    الكل
                                                                </label>
                                                            </div>
                                                            <div class="flex items-center my-2">
                                                                <input id="last_week" type="radio" name="duration"
                                                                    class="hidden" />
                                                                <label for="last_week"
                                                                    class="flex items-center cursor-pointer text-sm">
                                                                    <span
                                                                        class="w-5 h-5 inline-block ml-3 ltr:mr-2 rounded-full border border-grey flex-no-shrink"></span>
                                                                    اخر اسبوع
                                                                </label>
                                                            </div>
                                                            <div class="flex items-center my-2">
                                                                <input id="last_month" type="radio" name="duration"
                                                                    class="hidden" />
                                                                <label for="last_month"
                                                                    class="flex items-center cursor-pointer text-sm">
                                                                    <span
                                                                        class="w-5 h-5 inline-block ml-3 ltr:mr-2 rounded-full border border-grey flex-no-shrink"></span>
                                                                    اخر شهر
                                                                </label>
                                                            </div>
                                                            <div class="flex items-center my-2">
                                                                <input id="last_3_montth" type="radio" name="duration"
                                                                    class="hidden" />
                                                                <label for="last_3_montth"
                                                                    class="flex items-center cursor-pointer text-sm">
                                                                    <span
                                                                        class="w-5 h-5 inline-block ml-3 ltr:mr-2 rounded-full border border-grey flex-no-shrink"></span>
                                                                    اخر 3 أشهر
                                                                </label>
                                                            </div>
                                                            <div class="flex items-center my-2">
                                                                <input id="last_year" type="radio" name="duration"
                                                                    class="hidden" />
                                                                <label for="last_year"
                                                                    class="flex items-center cursor-pointer text-sm">
                                                                    <span
                                                                        class="w-5 h-5 inline-block ml-3 ltr:mr-2 rounded-full border border-grey flex-no-shrink"></span>
                                                                    اخر سنة
                                                                </label>
                                                            </div>
                                                        </div>
                                                        </d>
                                                </details>
                                            </div>
                                        </div>
                                        <!-- other properties -->
                                        <div class=" py-3 ">
                                            <label class="ml-2 text-gray-600 font-semibold text-lg">خصائص أخرى</label>
                                            <!-- categories list -->
                                            <ul class="mt-4">
                                                <li class="flex justify-start items-center">
                                                    <label
                                                        class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                                        <input type="checkbox"
                                                            class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "
                                                            checked><span class="ml-2 text-gray-700 text-smd">موثوق
                                                            الهوية</span>
                                                    </label>
                                                    <svg class="h-7 w-7 text-green-600 mr-3 ltr:ml-3 mt-2" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                                    </svg>
                                                </li>
                                                <li>
                                                    <label
                                                        class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                                        <input type="checkbox"
                                                            class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                                            class="ml-2 text-gray-700 text-smd">يقبل الخصم</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label
                                                        class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                                        <input type="checkbox"
                                                            class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                                            class="ml-2 text-gray-700 text-smd">نسبة الخصم</span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label
                                                        class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                                        <input type="checkbox"
                                                            class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                                            class="ml-2 text-gray-700 text-smd">خدمة مابعد البيع</span>
                                                    </label>
                                                </li>
                                                <li class="flex justify-start items-center">
                                                    <label
                                                        class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                                        <input type="checkbox"
                                                            class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                                            class="ml-2 text-gray-700 text-smd">مفتوح الان</span>
                                                    </label>
                                                    <span
                                                        class="h-5 w-5 rounded-full bg-green-500  mr-3 ltr:ml-3 mt-2"></span>

                                                </li>
                                                <li>
                                                    <label
                                                        class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                                        <input type="checkbox"
                                                            class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                                            class="ml-2 text-gray-700 text-smd">يقبل التقسيط</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label
                                                        class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                                        <input type="checkbox"
                                                            class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                                            class="ml-2 text-gray-700 text-smd">يعمل بنظام HACCP</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label
                                                        class="inline-flex items-center text-sm mt-3 gap-x-4 cursor-pointer">
                                                        <input type="checkbox"
                                                            class="form-checkbox h-4 w-4 text-gray-600 accent-primaryTextColor "><span
                                                            class="ml-2 text-gray-700 text-smd">يقبل الرقابة
                                                            الالكترونية</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a href=""
                                    class="table text-center mx-auto my-6 px-4 py-2 font-medium text-white bg-primaryTextColor rounded hover:bg-primaryTextColorDarken">تطبيق</a>

                            </div>
                        </div>
                    </div>
                    <!-- end filter in popup -->
                    <div class="flex justify-between items-center gap-2">
                        <!-- cards grriid-->
                        <button @click="isGrid = true">
                            <svg class="h-6 w-6 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="7" height="7" />
                                <rect x="14" y="3" width="7" height="7" />
                                <rect x="14" y="14" width="7" height="7" />
                                <rect x="3" y="14" width="7" height="7" />
                            </svg>
                        </button>
                        <!-- list -->
                        <button @click="isGrid =false">
                            <svg class="h-7 w-7 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="8" y1="6" x2="21" y2="6" />
                                <line x1="8" y1="12" x2="21" y2="12" />
                                <line x1="8" y1="18" x2="21" y2="18" />
                                <line x1="3" y1="6" x2="3.01" y2="6" />
                                <line x1="3" y1="12" x2="3.01" y2="12" />
                                <line x1="3" y1="18" x2="3.01" y2="18" />
                            </svg>
                        </button>
                        <!-- <select class=" filter-input " style="width:auto !important">
                <option value="" disabled>التاريخ</option>
                <option value="newest">الأحدث</option>
                <option value="oldest">الأقدم</option>
              </select> -->
                    </div>
                </div>
            </div>
            <!-- list -->
            <div x-show="!isGrid" class="mt-6">
                <!-- professional single card -->
                @forelse ($professionals as $pro)
                <div class="flex items-start md:items-center gap-x-3 mb-2 p-4 py-6 border rounded bg-white shadow-lg">
                    <div class="w-2/6 md:w-1/12 mt-4 md:mt-0 ">
                        <img src="{{$pro->profile_photo_path}}" alt="{{$pro->user->full_name}}"
                            class="w-full h-full rounded-full">
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <a href="professional_details.html"
                                class="flex justify-start items-center gap-x-2 text-smd md:text-base text-primaryTextColor">
                                {{$pro->user->full_name}}
                                <span class="h-3 w-3 rounded-full bg-green-500 mr-2 ltr!ml-2"></span>
                            </a>
                            <a href="hire_prodc.html"
                                class="flex items-center justify-center gap-x-1 px-4 py-1 text-sm md:text-md font-medium text-white bg-primaryTextColor rounded hover:bg-primaryTextColorDarken">
                                <svg class="h-4 w-4 mt-1 text-white" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="22" y1="2" x2="11" y2="13" />
                                    <polygon points="22 2 15 22 11 13 2 9 22 2" />
                                </svg>
                                <span>{{trans('frontend.hire_me')}}</span>
                            </a>
                        </div>
                        <div class="text-gray-600 text-sm md:text-md my-3 flex justify-start gap-x-8 items-center">
                            <!-- rating box -->
                            <div class="flex items-center">
                                @php
                                $rating = $pro->reviews_count > 0 ? (intval($pro->reviews_sum_rating)
                                /($pro->reviews_count *5 ) ) * 5 : 0;


                                $filledStars = floor($rating); // Get the whole number of filled stars
                                $halfStar = ($rating - $filledStars) >= 0.5; // Check if a half star should be displayed

                                $maxStars = 5; // Maximum number of stars

                                // Loop through the maximum number of stars
                                for ($i = 0; $i < $maxStars; $i++) { if ($filledStars> 0) {
                                    // Display a filled star
                                    echo '<svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>';
                                    $filledStars--;
                                    } elseif ($halfStar) {
                                    // Display a half star
                                    echo '<svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>';
                                    $halfStar = false;
                                    } else {
                                    // Display an empty star
                                    echo '<svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>';
                                    }
                                    }

                                    @endphp


                            </div>
                            <!-- tags -->
                            <div class="truncate ">
                                {{$pro->user->job->title.', '.$pro->user->job_position_title}}
                            </div>
                        </div>
                        <!-- short description -->
                        <p class="text-sm mt-2">
                            {{\Illuminate\Support\Str::limit($pro->bio,100)}}
                        </p>
                    </div>
                </div>
                @empty

                <x-alert type="info"
                    message="{{trans('frontend.no_item_added_yet',['title'=>trans('frontend.professionals')])}}" />
                @endforelse
                <!-- pagination -->
                {{$professionals->links()}}

            </div>
            <!-- grid -->
            <div x-show="isGrid" class="w-full py-4 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-3">
                <!-- professionals card example-->
                @foreach ($professionals as $pro)
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <a href="professional_details.html" class="px-2 py-4 hover:bg-blue-50 block">
                        <img class="h-20 w-20  mt-4 rounded-full mx-auto " src="{{$pro->user->profile_photo_path}}"
                            alt="{{$pro->user->full_name}}">

                        <h6 class="flex justify-center items-center gap-x-2 mt-2 text-smd text-gray-900 md:text-md">
                            {{$pro->user->full_name}}
                            <span class="h-3 w-3 rounded-full bg-green-500 "></span>
                        </h6>
                        <div class="flex justify-center gap-2 my-3">
                            <div class="flex items-center gap-1 text-[13px] ">
                                <svg class="h-4 w-4 text-gray-500" fill="#6b6666" width="64px" height="64px"
                                    viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" stroke="#6b6666">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <circle cx="44.6" cy="36.2" r="16.1"></circle>
                                        <path
                                            d="M48.8,79.6c2.8,0,1.2-1.9,1.2-1.9h0a19.22,19.22,0,0,1-4.2-12,18.65,18.65,0,0,1,1.7-7.9l.2-.4a1.17,1.17,0,0,0-.9-1.9h0a17.7,17.7,0,0,0-2.3-.1A24.35,24.35,0,0,0,20.4,76.3c0,1.2.4,3.5,4.2,3.5H48.3C48.7,79.6,48.7,79.6,48.8,79.6Z">
                                        </path>
                                        <path
                                            d="M65.3,51.2A14.25,14.25,0,1,0,79.5,65.5,14.25,14.25,0,0,0,65.3,51.2Zm0,4.5a3.22,3.22,0,0,1,3.2,3.2,3.06,3.06,0,0,1-.7,2l2.3,4.3c.1.2,0,.4-.2.4a2.7,2.7,0,0,0-1.1.5c-.2.1-.4,0-.4-.1l-2.2-4.1a3.08,3.08,0,0,1-.9.1,3.22,3.22,0,0,1-3.2-3.2A3.08,3.08,0,0,1,65.3,55.7Zm-2,8.2L61.1,68a3.26,3.26,0,0,1,1,2.3,3.2,3.2,0,1,1-3.2-3.2h.4l2.3-4.3c.1-.2.2-.2.5-.1a2.87,2.87,0,0,0,1.1.6C63.3,63.7,63.4,63.9,63.3,63.9Zm8.3,9.8a3.29,3.29,0,0,1-3-1.9H64.2c-.2,0-.4-.2-.2-.4a2.48,2.48,0,0,0,.1-.9v-.2c0-.2.1-.4.2-.4h4.2a3.12,3.12,0,0,1,3.1-2.6,3.22,3.22,0,0,1,3.2,3.2A3.44,3.44,0,0,1,71.6,73.7Z">
                                        </path>
                                    </g>
                                </svg>
                                <span> {{\Illuminate\Support\Str::limit($pro->user->job->title,22).', '.\Illuminate\Support\Str::limit($pro->user->job_position_title,22)}}<span>
                            </div>
                            @if($pro->user->nationality || $pro->user->city)
                            <div class="flex items-center gap-1 text-[13px] " >
                                <svg class="h-3 w-3 text-gray-600" width="64px" height="64px" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6b6666">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.3856 23.789L11.3831 23.7871L11.3769 23.7822L11.355 23.765C11.3362 23.7501 11.3091 23.7287 11.2742 23.7008C11.2046 23.6451 11.1039 23.5637 10.9767 23.4587C10.7224 23.2488 10.3615 22.944 9.92939 22.5599C9.06662 21.793 7.91329 20.7041 6.75671 19.419C5.60303 18.1371 4.42693 16.639 3.53467 15.0528C2.64762 13.4758 2 11.7393 2 10C2 7.34784 3.05357 4.8043 4.92893 2.92893C6.8043 1.05357 9.34784 0 12 0C14.6522 0 17.1957 1.05357 19.0711 2.92893C20.9464 4.8043 22 7.34784 22 10C22 11.7393 21.3524 13.4758 20.4653 15.0528C19.5731 16.639 18.397 18.1371 17.2433 19.419C16.0867 20.7041 14.9334 21.793 14.0706 22.5599C13.6385 22.944 13.2776 23.2488 13.0233 23.4587C12.8961 23.5637 12.7954 23.6451 12.7258 23.7008C12.6909 23.7287 12.6638 23.7501 12.645 23.765L12.6231 23.7822L12.6169 23.7871L12.615 23.7885C12.615 23.7885 12.6139 23.7894 12 23L12.6139 23.7894C12.2528 24.0702 11.7467 24.0699 11.3856 23.789ZM12 23L11.3856 23.789C11.3856 23.789 11.3861 23.7894 12 23ZM15 10C15 11.6569 13.6569 13 12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10Z"
                                            fill="currentColor"></path>
                                    </g>
                                </svg>
                                <span>{{\Illuminate\Support\Str::limit($pro->user->nationality,6) ?? \Illuminate\Support\Str::limit($pro->user->city,6) }} <span>
                            </div>
                            @endif
                        </div>
                        <!-- rating box -->
                        <div class="flex items-center justify-center">
                            @php
                            $rating = $pro->reviews_count > 0 ? (intval($pro->reviews_sum_rating)
                            /($pro->reviews_count *5 ) ) * 5 : 0;


                            $filledStars = floor($rating); // Get the whole number of filled stars
                            $halfStar = ($rating - $filledStars) >= 0.5; // Check if a half star should be displayed

                            $maxStars = 5; // Maximum number of stars

                            // Loop through the maximum number of stars
                            for ($i = 0; $i < $maxStars; $i++) { if ($filledStars> 0) {
                                // Display a filled star
                                echo '<svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>';
                                $filledStars--;
                                } elseif ($halfStar) {
                                // Display a half star
                                echo '<svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>';
                                $halfStar = false;
                                } else {
                                // Display an empty star
                                echo '<svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>';
                                }
                                }

                                @endphp


                        </div>
                    </a>
                    <a href="professional_details.html" class="smd-button primary-btn text-center m-4 mt-2 block">
                    {{trans('frontend.show_personal_profile')}}
                    </a>
                </div>
                @endforeach
            </div>
            @if(!count($professionals))
            <x-alert type="info" 
                    message="{{trans('frontend.no_item_added_yet',['title'=>trans('frontend.professional')])}}" />
            @endif
            {{$professionals->links()}}
           
        </div>
    </div>
</section>