@extends('layouts.app')
@section('title','إضافة خدمة')
@section('content')
<div>
    @livewire('breadcrumb', ['first_link' => 'home','first_link_title'=>'خدمات','second_link_title'=>'إضافة طلب خدمة'])
    <section class="px-4 md:px-14 pb-16  bg-body text-gray-700 relative overflow-hidden ">
        <!-- <h2 class="text-2xl">إضافة مشروع</h2> -->
        <div class="md:flex justify-between items-start gap-4">
            <form class="w-full md:w-2/3 !font-Noto-Naskh">
                <!-- main form -->
                <div class="bg-white p-6">
                    <div class="project-title mb-5">
                        <label for="project-title" class=" my-2 flex">
                            <span>عنوان الخدمة المطلوبة</span>
                            <span class="text-red-600 text-xl font-bold mr-2">*</span>
                        </label>
                        <input type="text" class="white-input-theme" id="project-title" value="">
                    </div>
                    <div class="description mb-5">
                        <label for="description" class=" my-2 flex">
                            <span>وصف الخدمة المطلوبة</span>
                            <span class="text-red-600 text-xl font-bold mr-2">*</span>
                        </label>
                        <textarea class="white-input-theme" name="description" id="description" rows="10"></textarea>
                        <span class="block mt-2 text-sm">أدخل وصفاً مفصلاً للخدمة المطلوبة وأرفق أمثلة لما تريد ان أمكن
                        </span>
                    </div>
                    <div class="description mb-5">
                        <label for="description" class=" my-2 flex">
                            <span></span>
                            <span class="text-red-600 text-xl font-bold mr-2">*</span>
                        </label>
                        <textarea class="white-input-theme" name="description" id="description" rows="10"></textarea>
                        <span class="block mt-2 text-sm">أدخل وصفاً مفصلاً للخدمة المطلوبة وأرفق أمثلة لما تريد ان أمكن
                        </span>
                    </div>
                    <div class="mb- md:flex justify-between gap-2 items-center">
                        <main class="w-full md:1/2">
                            <!-- file upload modal -->
                            <article aria-label="File Upload Modal"
                                class="relative h-full flex flex-col bg-white shadow-xl rounded-md"
                                ondrop="dropHandler(event);" ondragover="dragOverHandler(event);"
                                ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
                                <!-- overlay -->
                                <div id="overlay"
                                    class="w-full h-full absolute top-8 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                                    <i>
                                        <svg class="fill-current w-12 h-12 mb-3 text-blue-700"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                                        </svg>
                                    </i>
                                    <p class="text-lg text-blue-700">أفلت الملفات</p>
                                </div>

                                <!-- scroll area -->
                                <section class="h-full  w-full flex flex-col">
                                    <label for="work-budget" class=" my-2 flex">
                                        <span>صور العمل</span>
                                    </label>
                                    <header
                                        class=" border border-gray-400 py-12 flex flex-col justify-center items-center">
                                        <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                                            <span>قم بالسحب والافلات </span>&nbsp;<span>لملفاتك في أي مكان</span>
                                        </p>
                                        <input id="hidden-input2" type="file" multiple accept="images/*"
                                            class="hidden" />
                                        <button id="upload-button2"
                                            class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                            رفع ملف
                                        </button>
                                    </header>


                                    <ul id="gallery2" class="flex flex-1 flex-wrap -m-1  mt-8 p-6">
                                        <li id="empty"
                                            class="h-full w-full text-center flex flex-col items-center justify-center hidden">
                                            <img class="mx-auto w-32"
                                                src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png"
                                                alt="no data" />
                                            <span class="text-small text-gray-500">لم يتم اختيار أي ملف</span>
                                        </li>
                                    </ul>
                                </section>

                                <!-- sticky footer -->
                                <!-- <footer class="flex justify-end px-8 pb-8 pt-4">
                      <button id="submit" class="rounded-sm px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
                        الرفع الان
                      </button>
                      <button id="cancel" class="ml-3 rounded-sm px-3 py-1 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                        إلغاء
                      </button>
                    </footer> -->
                            </article>
                        </main>
                        <template id="image-template">
                            <li class="block p-1 w-full h-12">
                                <article tabindex="0"
                                    class="group hasImage w-full h-full rounded shadow-md focus:outline-none focus:shadow-outline bg-gray-100 border cursor-pointer relative text-transparent hover:text-white shadow-sm">
                                    <img alt="upload preview"
                                        class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                                    <section
                                        class="flex  rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                        <h1 class="flex-1"></h1>
                                        <div class="flex">
                                            <span class="p-1">
                                                <i>
                                                    <svg class="fill-current w-4 h-4 ml-auto pt-"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                                    </svg>
                                                </i>
                                            </span>

                                            <p class="p-1 size text-xs"></p>
                                            <button
                                                class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path class="pointer-events-none"
                                                        d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </section>
                                </article>
                            </li>
                        </template>
                    </div>
                    <!-- skills -->
                    <!-- <div class=" mb-5">
                <label class="my-2  text-md block" for="select-skill"
                  >المهارات المستخدمة</label
                >
                <div class="relative flex w-full">
                  <select
                    id="select-skill"
                    name="skills[]"
                    multiple
                    placeholder="اختر المهارة..."
                    autocomplete="off"
                    class="white-input-select"
                    multiple
                  >
                  <option value="d">HTML5</option>
                  <option value="dq">TAILWINDCSS</option>
                  <option value="qds">PHP</option>
                  <option value="sdf">MArketing</option>
                  </select>
                </div>
              </div> -->
                    <!-- budget and duration -->
                    <!-- <div class="project-budget mb-5 md:flex justify-between gap-2 items-center"> 
                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                  <label for="project-budget" class=" my-2 flex">
                    <span>الميزانية المتوقعة</span>
                    <span class="text-red-600 text-xl font-bold mr-2">*</span>
                  </label>
                  <select class="white-input-select overflow-y-visible" id="project-budget"  >
                    <option value="25-50">25 - 50 دولار</option>
                    <option value="50-100">50 - 100 دولار</option>
                    <option value="100-250">100 - 250 دولار</option>
                    <option value="">250 - 500 دولار</option>
                    <option value="sdf">500 - 1000 دولار</option>
                    <option value="sdf">1000 - 2500 دولار</option>
                    <option value="sdf">2500 - 5000 دولار</option>
                    <option value="sdf">5000 - 10000 دولار</option>
                  </select>
                 <span class=" block mt-2 text-sm">حدد الميزانية المناسبة للخدمة المطلوبة</span>
                </div>
                <div class="w-full md:w-1/2">
                  <label for="project-budget" class=" my-2 flex">
                    <span>المدة المتوقعة</span>
                    <span class="text-red-600 text-xl font-bold mr-2">*</span>
                  </label>
                  <div class="flex itmes-center pt-0.5">
                    <input type="number" class="white-input-theme w-10/12" id="project-duration" type="button" value="">
                    <span class="bg-body w-2/12 text-center leading-[2.4rem] border-l border-y border-gray-400">أيام</span>
    
                  </div>
    
                 <span class=" block mt-2 text-sm">متى تحتاج استلام مشروعك</span>
                </div>
                
              </div> -->
                </div>
                <!-- advanced form -->
                <div class="bg-white p-6 mt-8" x-data="addRemove()">
                    <h2 class="text-lg flex items-center gap-2 cursor-pointer font-semibold"
                        @click="isAdvancedForm =! isAdvancedForm">
                        <span>تخصيص الخدمة المطلوبة</span>
                        <svg class="h-5 w-5" x-show="!isAdvancedForm" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                        <svg class="h-5 w-5" x-show="isAdvancedForm" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="6 15 12 9 18 15" />
                        </svg>
                    </h2>
                    <div class="mt-3 py-2" x-show="isAdvancedForm">
                        <div class="project-questions mb-5">
                            <label for="project-questions" class=" my-2 flex">
                                <span>أسئلة تخص الخدمة المطلوبة</span>
                            </label>
                            <template x-for="(field, index) in questions" :key="field">
                                <div class="mb-3">
                                    <input type="text" name="questions[]" class="white-input-theme"
                                        placeholder="مثلا: ماهي اللغات التي تتقنها؟">
                                    <div class="mt-2 flex justify-between items-center">
                                        <!-- is required checkbox -->
                                        <div class="flex items-center gap-2 text-sm">
                                            <input type="checkbox" name="check_required[]"
                                                class="border-gray-300 rounded h-4 w-4">
                                            <label for="">سؤال اجباري</label>
                                        </div>
                                        <!-- delete button -->
                                        <a href="#" class="text-red-500 text-smd"
                                            @click.prevent="removeField(field)">حذف</a>
                                    </div>
                                </div>
                            </template>
                            <a href="#" @click.prevent="addNewField()" class="border p-2 px-3 text-sm table mt-6">إضافة
                                سؤال جديد</a>
                        </div>
                    </div>
                </div>
                <div class="py-3 ">
                    <!-- end of the form -->
                    <button type="submit" class="md-button success-btn mt-8 ">إضافة الخدمة المطلوبة</button>
                </div>

            </form>
            <div class="w-full md:w-1/3 p-6 pt-0">
                <div class="mb-6">
                    <h2 class="text-xl mb-3">ابدأ بإنجاز أي خدمة تريدها</h2>
                    <p class="leading-9 text-sm">
                        تستطيع إنجاز أي خدمة تحتاجها بالشكل الذي تريده من خلال هذا النموذج ، أدخل تفاصيل
                        الخدمة والمدة المتوقعة ليتم مراجعته ونشره مجانا، بعد ذلك سيظهر هذا الإعلان للمحترفين
                        صفحة الخدمات المطلوبة ويقدموا عروضهم عليه لتختار العرض الأنسب لك ويبدأ المحترف
                        بتنفيد الخدمة التي طلبتها
                    </p>
                </div>
                <div class="mb-6">
                    <h2 class="text-xl mb-3">إضمن حقوقك</h2>
                    <h2 class="text-smd mb-3"> من أجل ضمان حقوقك وتقديم أفضل خدمة ممكنة، نحثك على إتباع الإرشادات
                        التالي:</h2>
                    <ul class="list-disc pr-6">
                        <li class="text-sm leading-9">
                            قبل إختيارك لأي محترف نوصيك بمراجعة ملفه التعريفي
                            على الموقع والإطلاع بعناية على
                            أعماله وتقييمات العملاء السابقين له ومعرفة خبراته ومهاراته وسيرته المهنية.
                        </li>
                        <li class="text-sm leading-9">
                            الأفضل الحصول على الأقل ثلاث عروض على الخدمة المطلوبة هذا سيتيح لك
                            فرصة لتقارن بينها وتختار الأنسب لك من حيث السعر والجودة.
                        </li>
                        <li class="text-sm leading-9">
                            إبلاغ إدارة الموقع بتفاصيل الاتفاق الذي ستتوصل إليه مع المحترف من خلال مسح رمز الإستجابة
                            السريعة (QR Code)
                            الخاص بالمحترف والموجود على بطاقة هويته الالكترونية
                            <strong class="group relative text-red-500 !text-smd cursor-pointer">*1
                                <div class="group-hover:opacity-100 transition-opacity bg-gray-200  rounded-md absolute bottom-2 left-1/2
                    -translate-x-1/2  opacity-0 m-4 z-40 border border-gray-400 p-1 mx-auto w-max">
                                    <img src="assets/images/id_card.png" alt="" class="h-32 w-32">
                                </div>
                            </strong>
                            والنقر على زر "<strong class="text-md">تم الاتفاق</strong>"
                            <strong class="group relative text-red-500 !text-smd cursor-pointer">*2
                                <div class="group-hover:opacity-100 transition-opacity bg-gray-200  rounded-md absolute bottom-2 left-1/2
                    -translate-x-1/2  opacity-0 m-4 z-40 border border-gray-400 p-1 mx-auto w-max">
                                    <img src="assets/images/prodc_preview.png" alt="" class="h-64 w-64">
                                </div>
                            </strong>
                            مع ذكر المدة المحدد لإنجاز الخدمة والتكلفة المتفق عليها.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection