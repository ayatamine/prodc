@extends('layouts.app')
@section('title')
    الباقات
@endsection
@section('content')
<div class=" bg-body mt-16 py-8  px-6 md:px-12">
      <div class="bg-white py-8 px-2 md:px-6">
        <!-- <a href="index.html" class=" text-md text-primaryTextColor underline underline-offset-4 ">الرئيسية</a> -->
        <h2 class="text-primaryTextColor text-center  text-lg md:text-2xl mt-4">باقات المحترف القوي الأمين</h2>
        <h2 class="text-sectionTitleColor font-semibold text-center  text-sm md:text-smd mt-5">المدة: عام من تاريخ الإشتراك في الباقة</h2>

        <!-- start plans v2 -->
        <div class="bg-white dark:bg-gray-900">
          <div class="container px-3 py-8 mx-auto">
              <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 space-y-8 lg:-mx-2 lg:space-y-0">
                  <div class="flex flex-col !mt-0  bg-[#ffca2c0d] w-full max-w-sm p-3 space-y-8 text-center border-2 border-gray-200 rounded-lg lg:mx-2 dark:bg-gray-900 dark:border-gray-700">
                      <div class="flex-shrink-0">
                          <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-100 dark:bg-gray-700">
                              الباقة المجانية
                          </h2>
                      </div>
      
                      <div class="flex-shrink-0">
                          <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                              0€
                          </span>
                      </div>
      
                      <ul class="flex-1 space-y-4 text-[13px] font-semibold">
                          <li class="text-gray-800 dark:text-gray-400 border border-gray-400 font-bold text-[13px] py-3">
                            عدد موظفي الشركة:  <div class="!font-extrabold !text-[18.5px]">غير محدود  </div>
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-7">
                              <a href="calculate_affiliate.html" class="text-primaryTextColor underline underline-offset-2">نسبة عمولة الموقع  </a><div class="!font-extrabold !text-[19.5px]">1 - %5 </div>
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-8">
                            <div class=" text-red-500 !text-[14px]">القسم بالله العلي العظيم </div> على الالتزام <a href="ethiks.html" class="text-primaryTextColor underline underline-offset-2">بميثاق الأخلاق المهنية</a>
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-8">
                            <div class="!font-extrabold !text-[14px]" >إنشاء الهوية الإلكترونية</div>
                            مع ملفات تعريفية للمحترف والشركة
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                            لوحة تحكم شاملة
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-8">
                            <div class="!font-extrabold !text-[14px]">فضاء لعرض المنتجات والخدمات</div>
                              صور + فيديوهات
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-7">
                            <div class="!text-[14px]">متابعة تقييمات العملاء وقراءة</div>
                            تعليقاتهم والتفاعل معها للرد عليها
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                            إستلام <a href="certificate.html" class="text-primaryTextColor underline underline-offset-2">شهادة المحترف القوي الأمين</a>
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                            <div>إستلام <a href="badges.html" class="text-primaryTextColor underline underline-offset-2">البادج والملصقات</a></div>
                             (بعد عشر معاملات)                       
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                            الإخطار بالإشعارات الجديدة
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                            محادثات  ورسائل داخلية
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-7 ">
                            <div class="!text-[14px]">تثبيت الهوية الإلكترونية </div>
                            <div>بعد استكمال الملف +
                              <span class="!font-extrabold  !text-[18.5px]">20</span> 
                              تقييم إيجابي 
                             </div>
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-8">
                            <a class="block text-primaryTextColor !text-[14px] underline underline-offset-2" href="random_visits.html">زيارات عشوائية للمحترف </a> من قبل إدارة المنصة 
                          </li>

                          <li class="text-gray-800 dark:text-gray-400 leading-8">
                            <div class="!text-[14px]">إمكانية تقديم عروض على المشاريع</div>
                            المطروحة في المنصة
                          </li>
                          <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                            امكانية الحصول على مشاريع
                          </li>
                      </ul>
      
                      <div class="flex justify-center mt-8 gap-2">
                        <a href="register.html" class="px-4 py-2 tracking-wide text-white text-[14px] capitalize transition-colors duration-300 ease-in-out  transform bg-blue-500 rounded hover:bg-blue-600 focus:outline-none  focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                          أشترك وأتعهد بدفع عمولة الموقع
                        </a>
                        <!-- <button class="px-8 py-2 tracking-wide capitalize transition-colors duration-300 ease-in-out  transform bg-white text-primaryTextColor hover:text-white rounded border hover:bg-primary  focus:bg-primary focus:ring focus:ring-primary">
                          تصفح نسبة العمولة
                        </button> -->
                      </div>
                  </div>
      
                  <div class="flex flex-col !mt-0  bg-[#b0ffe2] text-white w-full max-w-sm p-3 space-y-8 text-center  border-2 border-gray-200 rounded-lg lg:mx-2 dark:bg-gray-900 dark:border-gray-700">
                      <div class="flex-shrink-0">
                          <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                              الباقة الصغرى
                          </h2>
                      </div>
      
                      <div class="flex-shrink-0">
                          <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                             111€
                          </span>
                          
                      </div>
      

                      <ul class="flex-1 space-y-4 text-[13px] font-semibold">
                        <li class="text-gray-800 dark:text-gray-400 border border-gray-400 font-bold text-[13px] py-3">
                          عدد موظفي الشركة بين:  <div class="!font-extrabold !text-[18.5px]">1 - 5  </div>
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-7">
                          نسبة عمولة الموقع  <div class="!font-extrabold !text-[19.5px]">%0</div>
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-8">
                          <div class=" text-red-500 !text-[14px]">القسم بالله العلي العظيم </div> على الالتزام بميثاق الأخلاق المهنية
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-8">
                          <div class="!font-extrabold !text-[14px]" >إنشاء الهوية الإلكترونية</div>
                          مع ملفات تعريفية للمحترف والشركة
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                          لوحة تحكم شاملة
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-8">
                          <div class="!font-extrabold !text-[14px]">فضاء لعرض المنتجات والخدمات</div>
                            صور + فيديوهات
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-7">
                          <div class="!text-[14px]">متابعة تقييمات العملاء وقراءة</div>
                          تعليقاتهم والتفاعل معها للرد عليها
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                          إستلام شهادة المحترف القوي الأمين
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                          <div>إستلام البادج + الملصقات</div>
                          <div class="h-[1.6rem]">

                          </div>                       
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                          الإخطار بالإشعارات الجديدة
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                          محادثات  ورسائل داخلية
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-7 ">
                          <div class="!text-[14px]">تثبيت الهوية الإلكترونية </div>
                          <div>بعد استكمال الملف +
                            <span class="!font-extrabold  !text-[18.5px]">20</span> 
                            تقييم إيجابي 
                          </div>
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-8">
                          <div class="  !text-[14px]">زيارات عشوائية للمحترف </div>
                           من قبل إدارة المنصة 
                        </li>

                        <li class="text-gray-800 dark:text-gray-400 leading-8">
                          <div class="!text-[14px]">إمكانية تقديم عروض على المشاريع</div>
                          المطروحة في المنصة
                        </li>
                        <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                          امكانية الحصول على مشاريع
                        </li>
                      </ul>
      
                    <div class="flex justify-center mt-8 gap-2">
                      <a href="{{route('subscribe_to_package',['id'=>2])}}" class="px-4 py-2 tracking-wide text-white text-[14px] capitalize transition-colors duration-300 ease-in-out  transform bg-blue-500 rounded hover:bg-blue-600 focus:outline-none  focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        اشترك الان
                      </a>
                      <!-- <button class="px-8 py-2 tracking-wide capitalize transition-colors duration-300 ease-in-out  transform bg-white text-primaryTextColor hover:text-white rounded border hover:bg-primary  focus:bg-primary focus:ring focus:ring-primary">
                        تصفح نسبة العمولة
                      </button> -->
                    </div>
                  </div>
                  <div class="flex flex-col w-full !mt-0 max-w-sm p-3 space-y-8 text-center bg-[#DDE9F5] border-2 border-gray-200 rounded-lg lg:mx-2 dark:bg-gray-900 dark:border-gray-700">
                    <div class="flex-shrink-0">
                        <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                            الباقة الوسطى
                        </h2>
                    </div>
    
                    <div class="flex-shrink-0">
                        <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                           222€
                        </span>
                        
                    </div>
    

                    <ul class="flex-1 space-y-4 text-[13px] font-semibold">
                      <li class="text-gray-800 dark:text-gray-400 border border-gray-400 font-bold text-[13px] py-3">
                        عدد موظفي الشركة بين:  <div class="!font-extrabold !text-[18.5px]">6 - 15  </div>
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7">
                        نسبة عمولة الموقع  <div class="!font-extrabold !text-[19.5px]">%0</div>
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-8">
                        <div class=" text-red-500 !text-[14px]">القسم بالله العلي العظيم </div> على الالتزام بميثاق الأخلاق المهنية
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-8">
                        <div class="!font-extrabold !text-[14px]" >إنشاء الهوية الإلكترونية</div>
                        مع ملفات تعريفية للمحترف والشركة
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                        لوحة تحكم شاملة
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-8">
                        <div class="!font-extrabold !text-[14px]">فضاء لعرض المنتجات والخدمات</div>
                          صور + فيديوهات
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7">
                        <div class="!text-[14px]">متابعة تقييمات العملاء وقراءة</div>
                        تعليقاتهم والتفاعل معها للرد عليها
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                        إستلام شهادة المحترف القوي الأمين
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                        <div>إستلام البادج + الملصقات</div>
                        <div class="h-[1.6rem]">

                        </div>                       
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                        الإخطار بالإشعارات الجديدة
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                        محادثات  ورسائل داخلية
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 ">
                        <div class="!text-[14px]">تثبيت الهوية الإلكترونية </div>
                        <div>بعد استكمال الملف +
                          <span class="!font-extrabold  !text-[18.5px]">20</span> 
                          تقييم إيجابي 
                        </div>
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-8">
                        <div class="  !text-[14px]">زيارات عشوائية للمحترف </div>
                         من قبل إدارة المنصة 
                      </li>

                      <li class="text-gray-800 dark:text-gray-400 leading-8">
                        <div class="!text-[14px]">إمكانية تقديم عروض على المشاريع</div>
                        المطروحة في المنصة
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                        امكانية الحصول على مشاريع
                      </li>
                    </ul>
    
                  <div class="flex justify-center mt-8 gap-2">
                    <a  href="{{route('subscribe_to_package',['id'=>3])}}" class="px-4 py-2 tracking-wide text-white text-[14px] capitalize transition-colors duration-300 ease-in-out  transform bg-blue-500 rounded hover:bg-blue-600 focus:outline-none  focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                      اشترك الان
                    </a>
                    <!-- <button class="px-8 py-2 tracking-wide capitalize transition-colors duration-300 ease-in-out  transform bg-white text-primaryTextColor hover:text-white rounded border hover:bg-primary  focus:bg-primary focus:ring focus:ring-primary">
                      تصفح نسبة العمولة
                    </button> -->
                  </div>
                  </div>
                  <div class="flex flex-col w-full !mt-0  max-w-sm p-3 space-y-8 text-center bg-[#ffcf707c] border-2 border-gray-200 rounded-lg lg:mx-2 dark:bg-gray-900 dark:border-gray-700">
                    <div class="flex-shrink-0">
                        <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-blue-400 uppercase rounded-lg bg-gray-50 dark:bg-gray-700">
                            الباقة الكبرى
                        </h2>
                    </div>
    
                    <div class="flex-shrink-0">
                        <span class="pt-2 text-3xl font-bold text-gray-800 uppercase dark:text-gray-100">
                           333€
                        </span>
                        
                    </div>
    

                    <ul class="flex-1 space-y-4 text-[13px] font-semibold">
                      <li class="text-gray-800 dark:text-gray-400 border border-gray-400 font-bold text-[13px] py-3">
                        عدد موظفي الشركة بين:  <div class="!font-extrabold !text-[18.5px]">1 - 5  </div>
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7">
                        نسبة عمولة الموقع  <div class="!font-extrabold !text-[19.5px]">%0</div>
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-8">
                        <div class=" text-red-500 !text-[14px]">القسم بالله العلي العظيم </div> على الالتزام بميثاق الأخلاق المهنية
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-8">
                        <div class="!font-extrabold !text-[14px]" >إنشاء الهوية الإلكترونية</div>
                        مع ملفات تعريفية للمحترف والشركة
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                        لوحة تحكم شاملة
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-8">
                        <div class="!font-extrabold !text-[14px]">فضاء لعرض المنتجات والخدمات</div>
                          صور + فيديوهات
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7">
                        <div class="!text-[14px]">متابعة تقييمات العملاء وقراءة</div>
                        تعليقاتهم والتفاعل معها للرد عليها
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                        إستلام شهادة المحترف القوي الأمين
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                        <div>إستلام البادج + الملصقات</div>
                        <div class="h-[1.6rem]">

                        </div>                       
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                        الإخطار بالإشعارات الجديدة
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                        محادثات  ورسائل داخلية
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 ">
                        <div class="!text-[14px]">تثبيت الهوية الإلكترونية </div>
                        <div>بعد استكمال الملف +
                          <span class="!font-extrabold  !text-[18.5px]">20</span> 
                          تقييم إيجابي 
                        </div>
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-8">
                        <div class="  !text-[14px]">زيارات عشوائية للمحترف </div>
                         من قبل إدارة المنصة 
                      </li>

                      <li class="text-gray-800 dark:text-gray-400 leading-8">
                        <div class="!text-[14px]">إمكانية تقديم عروض على المشاريع</div>
                        المطروحة في المنصة
                      </li>
                      <li class="text-gray-800 dark:text-gray-400 leading-7 !text-[14px]">
                        امكانية الحصول على مشاريع
                      </li>
                    </ul>
    
                  <div class="flex justify-center mt-8 gap-2">
                    <a  href="{{route('subscribe_to_package',['id'=>4])}}" class="px-4 py-2 tracking-wide text-white text-[14px] capitalize transition-colors duration-300 ease-in-out  transform bg-blue-500 rounded hover:bg-blue-600 focus:outline-none  focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                      اشترك الان
                    </a>
                    <!-- <button class="px-8 py-2 tracking-wide capitalize transition-colors duration-300 ease-in-out  transform bg-white text-primaryTextColor hover:text-white rounded border hover:bg-primary  focus:bg-primary focus:ring focus:ring-primary">
                      تصفح نسبة العمولة
                    </button> -->
                  </div>
                  </div>
      
              </div>
          </div>
        </div>
        <!-- end plans v2 -->
        <!-- details -->
        <div class="border-b pb-6 my-6 mt-10">
          <h2 class="text-smd md:text-lg mb-5">الفئات التي يمكن لها الحصول على شهادة المحترف القوي  الأمين بدون رسوم وبدون عمولة :</h2>
          <ul class="w-full md:w-2/3">
            <li class="flex justify-between items-center mb-3 text-sm md:text-base">
              <span>
                - <span class="text-sectionTitleColor">سلك التعليم:</span>  المعلم / الأستاذ / الأستاذ الجامعي 
              </span>
              <a href="register.html" class="text-primaryTextColor underline underline-offset-2">سجل الان</a>
            </li>
            <li class="flex justify-between items-center mb-2 text-sm md:text-base">
              <span>
                - <span class="text-sectionTitleColor">الادارة:</span>  الموظفين والمدراء الذي يعملون لحساب غيرهم
              </span>
              <a href="register.html" class="text-primaryTextColor underline underline-offset-2">سجل الان</a>
            </li>
          </ul>
         
        </div>
         <!-- faqs -->
         <div class="faqs">
          <h2 class="text-gray-800  text-lg md:text-2xl my-4">الأسئلة الشائعة</h2>

          <div class="bg-slate-200  py-2">
            <!-- question here -->
            <div  x-data="{open:false}" class="border-b py-1 bg-slate-200">
              <h2 class="mx-3 bg-white p-2 py-5 text-smd flex justify-between items-center cursor-pointer rounded" @click.prevent="open = !open">
                <span>هل الاشتراك اجباري؟  </span>
                <svg class="h-5 w-5" x-show="!open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 9 12 15 18 9" /></svg>
                <svg class="h-5 w-5" x-show="open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 15 12 9 18 15" /></svg>
              </h2>
              <div class="mt-3 py-2 text-sm md:text-base leading-9 px-5" x-show="open"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-300"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              >
              الاشتراك اختياري وليس اجباري. الجهة التي لا ترغب في الاشتراك في هذه الخدمة بالإمكان ان تستمر باستخدام الباقة المجانية (ما عدى
              قسم الأغذية والمشروبات لا يمكنها الإشتراك في الباقة المجانية 
              </div>
            </div>
            <!-- question here -->
            <div  x-data="{open:false}" class="border-b py-1 bg-slate-200">
              <h2 class="mx-3 bg-white p-2 py-5 text-smd flex justify-between items-center cursor-pointer rounded" @click.prevent="open = !open">
                <span>هل هذا الإشتراك يناسبني؟</span>
                <svg class="h-5 w-5" x-show="!open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 9 12 15 18 9" /></svg>
                <svg class="h-5 w-5" x-show="open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 15 12 9 18 15" /></svg>
              </h2>
              <div class="mt-3 py-2 text-sm md:text-base leading-9 px-5" x-show="open"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-300"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              >
              إذا كنت تقوم بتسويق سلع كثيرة وتقدم خدمات مرتفعة الثمن فإن الإشتراك مناسب لك
              </div>
            </div>
            <!-- question here -->
            <div  x-data="{open:false}" class="border-b py-1 bg-slate-200">
              <h2 class="mx-3 bg-white p-2 py-5 text-smd flex justify-between items-center cursor-pointer rounded" @click.prevent="open = !open">
                <span>لا يوجد لدي معرض أو مكتب فهل يحق لي الاشتراك؟</span>
                <svg class="h-5 w-5" x-show="!open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 9 12 15 18 9" /></svg>
                <svg class="h-5 w-5" x-show="open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 15 12 9 18 15" /></svg>
              </h2>
              <div class="mt-3 py-2 text-sm md:text-base leading-9 px-5" x-show="open"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-300"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              >
              نعم .. حتى وإن كنت تقدم خدمات بمفردك
            </div>
            </div>
            <!-- question here -->
            <div  x-data="{open:false}" class="border-b py-1 bg-slate-200">
              <h2 class="mx-3 bg-white p-2 py-5 text-smd flex justify-between items-center cursor-pointer rounded" @click.prevent="open = !open">
                <span>هل سيتم إيقاف التعامل معي إذا لم يتم الاشتراك؟</span>
                <svg class="h-5 w-5" x-show="!open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 9 12 15 18 9" /></svg>
                <svg class="h-5 w-5" x-show="open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 15 12 9 18 15" /></svg>
              </h2>
              <div class="mt-3 py-2 text-sm md:text-base leading-9 px-5" x-show="open"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-300"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              >
              لابد من الإشتراك في باقة من الباقات المعلنة
              </div>
            </div>
            <!-- question here -->
            <div  x-data="{open:false}" class="border-b py-1 bg-slate-200">
              <h2 class="mx-3 bg-white p-2 py-5 text-smd flex justify-between items-center cursor-pointer rounded" @click.prevent="open = !open">
                <span>هل سيتم إيقاف العضوية عند انتهاء الاشتراك؟</span>
                <svg class="h-5 w-5" x-show="!open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 9 12 15 18 9" /></svg>
                <svg class="h-5 w-5" x-show="open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 15 12 9 18 15" /></svg>
              </h2>
              <div class="mt-3 py-2 text-sm md:text-base leading-9 px-5" x-show="open"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-300"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              >
              لن يتم إيقاف العضوية لكن العضوية سوف تتحول الى العضوية المجانية ذات العمولة
              </div>
            </div>
            <!-- question here -->
            <div  x-data="{open:false}" class="border-b py-1 bg-slate-200">
              <h2 class="mx-3 bg-white p-2 py-5 text-smd flex justify-between items-center cursor-pointer rounded" @click.prevent="open = !open">
                <span>هل يمكنني ترقية إشتراكي من الباقة المجانية الى الباقة المدفوعة الثمين ؟</span>
                <svg class="h-5 w-5" x-show="!open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 9 12 15 18 9" /></svg>
                <svg class="h-5 w-5" x-show="open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 15 12 9 18 15" /></svg>
              </h2>
              <div class="mt-3 py-2 text-sm md:text-base leading-9 px-5" x-show="open"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-300"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              >
              نعم يمكنك ترقية باقتك بمجرد النقر على زر ترقية الباقة
              </div>
            </div>
            <!-- question here -->
            <div  x-data="{open:false}" class="border-b py-1 bg-slate-200">
              <h2 class="mx-3 bg-white p-2 py-5 text-smd flex justify-between items-center cursor-pointer rounded" @click.prevent="open = !open">
                <span>هل يمكن أن يشترك أكثر من شخص في عضوية واحدة؟</span>
                <svg class="h-5 w-5" x-show="!open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 9 12 15 18 9" /></svg>
                <svg class="h-5 w-5" x-show="open"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="6 15 12 9 18 15" /></svg>
              </h2>
              <div class="mt-3 py-2 text-sm leading-9 px-5" x-show="open"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-300"
              x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              >
              لا، العضوية خاصة بعضو واحد
              </div>
            </div>
          </div>
        
         </div>
         <!-- send question -->
         <form action="" class="mt-10 w-full md:w-2/3 mx-auto text-center">
          <h2 class="text-gray-800  text-lg md:text-2xl my-4 text-center">هل لديك استفسار أو ملاحظة</h2>
          <textarea name="send_message" id=""  rows="8" class="white-input-theme" placeholder="هل لديك استفسار أو ملاحظة"></textarea>
          <button type="submit" class="smd-button primary-btn my-3">ارسال</button>
         </form>
      </div>

      <!-- end details -->
    </div>
@endsection
