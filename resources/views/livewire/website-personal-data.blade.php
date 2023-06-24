@section('title','بيانات الموقع')

<div class="w-full mt-4">
    <div class="bg-white rounded ">
      <h2 class="border-b px-6 text-md flex justify-between items-center ">
        <span class=" p-2 ">حسابي</span>
        <div class="flex justify-between gap-4">
          <a href="{{route('personal_data')}}" class="  p-2 @if(Request::segment(2) =='personal-data') border-b-2 border-black  @endif ">البيانات الشخصية</a>
          <a href="{{route('profile_website_data')}}" class="  p-2 @if(Request::segment(2) =='website-setting') border-b-2 border-black  @endif  "> بيانات الموقع</a>
        </div>
      </h2>
      <!-- form -->
      <form class="bg-white p-6">
        <div class="flex justify-between items-center gap-4">
          <div class=" mb-5 w-full md:w-1/2">
            <label for="specialitye" class=" my-2 flex" style="margin-bottom: 11px;">
              <span>التخصص</span>
              <span class="text-red-600 text-xl font-bold mr-2">*</span>
            </label>
            <select class="white-input-theme overflow-y-visible" id="speciality" style="    padding: 0.22rem;
               margin-bottom: 0.2rem;"  >
              <option value="inge">مهندس برمجيات</option>
              <option value="dedi">محامي</option>
            </select>
          </div>
          <div class=" mb-5 w-full md:w-1/2">
            <label for="job_name" class=" my-2 flex">
              <span>المسمى الوظيفي</span>
              <span class="text-red-600 text-xl font-bold mr-2">*</span>
            </label>
           <input type="text" class="white-input-theme" id="job_name"  value="">
          </div>
        </div>
        <div class="bio mb-5">
          <label for="bio" class=" my-2 flex">
            <span>نبذة شخصية</span>
            <span class="text-red-600 text-xl font-bold mr-2"></span>
          </label>
          <textarea class="white-input-theme" name="bio" id="bio" rows="10"></textarea>
        </div>
        <!-- skills -->
        <div class=" mb-5 w-full">
          <label for="specialitye" class=" my-2 flex" style="margin-bottom: 11px;">
            <span>المهارات الشخصية </span>
            <span class="text-red-600 text-xl font-bold mr-2"></span>
          </label>
          <select class="white-input-theme overflow-y-visible" id="speciality" style="    padding: 0.22rem;
             margin-bottom: 0.2rem;"  >
            <option value="inge">تصميم </option>
            <option value="dedi">figma</option>
          </select>
        </div>
        <!-- skills -->
        <div class=" mb-5 w-full md:w-1/2">
          <label for="specialitye" class=" my-2 flex" style="margin-bottom: 11px;">
            <span>نوع الحساب </span>
            <span class="text-red-600 text-xl font-bold mr-2"></span>
          </label>
          <div class=" p-3 border border-gray-400  mt-5">
            <div class="flex items-center gap-2 text-sm md:text-md">
              <input type="checkbox" name="client" class="border-gray-300 rounded h-5 md:h-4 w-5 md:w-4"  >
              <label for="" class="text-[13px]">صاحب مشاريع - مشتري  خدمات  </label>
            </div>
            <div class="flex items-center gap-2 text-sm md:text-md  mt-3">
              <input type="checkbox" name="professional" class="border-gray-300 rounded h-5 md:h-4 w-5 md:w-4"  >
              <label for="" class="text-[13px]">  منفذ مشاريع - بائع خدمات  </label>
            </div>
            <div class="flex items-center gap-2 text-sm md:text-md  mt-3 mx-3">
              <input type="checkbox" name="available_for_work" class="border-gray-300 rounded h-5 md:h-4 w-5 md:w-4"  >
              <label for="" class="text-[13px]">  متاح للتوظيف </label>
            </div>
          </div>
          <div class="flex items-center gap-2 text-sm md:text-md  mt-5">
            <input type="checkbox" name="newsletter_subscribe" class="border-gray-300 rounded h-5 md:h-4 w-5 md:w-4"  >
            <label for="" class="text-[13px]"> الإشتراك في القائمة البريدية   </label>
          </div>
        </div>
        <div class="flex justify-end">
          <a href="" type="submit" class="w-auto float-left mt-6 bg-primaryTextColor text-sm md:text-smd text-white font-bold py-2 px-3 w-full rounded hover:bg-primaryTextColorDarken">حفظ التغييرات</a>
        </div>
      </form>
    </div>
  </div>