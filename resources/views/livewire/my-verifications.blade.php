@section('title','تذاكري')
<div x-data="{showInfo:false,toggle(){this.showInfo = !this.showInfo}}" role="tabpanel" aria-labelledby="dashboard-tab" class="bg-white h-full">
    <div class="bg-white p-2 px-6 border-b rounded flex justify-between items-center  ">
      <h2 class="  text-md">توثيق الهوية</h2>
      <button @click.prevent="toggle()" class="bg-blue-200 p-1 border border-blue-500">
        <svg class="h-6 w-6 text-blue-500 mx-auto"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
      </button>
    </div>
    <div class="w-full p-6" x-show="showInfo">
      <ul class="bg-primary w-full md:w-2/3 mx-auto p-3 text-white text-sm md:text-base">
        <li class="flex justify-start items-center gap-2 mb-1">
          <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 12l5 5l10 -10" /></svg>
          <span> وصول كامل لجميع خدمات منصة المحترف القوي الأمين    </span>
        </li>
        <li class="flex justify-start items-center gap-2 mb-1">
          <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 12l5 5l10 -10" /></svg>
          <span> اثبات ملكية الحساب </span>
        </li>
        <li class="flex justify-start items-center gap-2 mb-1">
          <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 12l5 5l10 -10" /></svg>
          <span>  زيادة الموثوقية اثناء تعامل المستخدمين معك  </span>
        </li>
      </ul>
    </div>
    <!-- forms -->
    <form class="p-16 grid grid-cols-1 sm:grid-cols-2 gap-6 gap-y-12">
      <div  class="text-center p-4">
        <img src="assets/images/id-verify-front-side.svg" alt="" class="w-36 h-36 mx-auto ">
        <p class="text-[13px] my-6 ">
          برجاء إرفاق صورة الوجه الأمامي من بطاقة تعريف الهوية الوطنية
        </p>
        <label for="identity-card" class="  py-2 text-white text-sm cursor-pointer rounded bg-primaryTextColor  hover:bg-primaryTextColorDarken px-8 block mx-auto w-fit">إرفاق ملف</label>
        <input type="file" class="hidden" name="identity_card" id="identity-card">
      </div>
      <div  class="text-center p-4">
        <img src="assets/images/id-verify-back-side.svg" alt="" class="w-36 h-36 mx-auto ">
        <p class="text-[13px] my-6 ">
          برجاء إرفاق صورة الوجه الخلفي من بطاقة تعريف الهوية الوطنية
        </p>
        <label for="identity-card-back" class="  py-2 text-white text-sm cursor-pointer rounded bg-primaryTextColor  hover:bg-primaryTextColorDarken px-8 block mx-auto w-fit">إرفاق ملف</label>
        <input type="file" class="hidden" name="identity_card_back" id="identity-card-back">
      </div>
      <div  class="text-center p-4">
        <img src="assets/images/id-verify-selfie.svg" alt="" class="w-36 h-36 mx-auto ">
        <p class="text-[13px] my-6 ">
          برجاء إرفاق صورة لك وانت تحمل بطاقة الهوية الوطنية الخاصة بك
        </p>
        <label for="identity-card-with-person" class="  py-2 text-white text-sm cursor-pointer rounded bg-primaryTextColor  hover:bg-primaryTextColorDarken px-8 block mx-auto w-fit">إرفاق ملف</label>
        <input type="file" class="hidden" name="identity_card_with_person" id="identity-card-with-person">
      </div>
      <div  class="text-center p-4">
        <img src="assets/images/id-verify-welcome.png" alt="" class="w-36 h-36 mx-auto ">
        <p class="text-[13px] my-6 ">
          بتقديمك لطلب التوثيق فانك توافق على شروط الاستخدام و الخصوصية
        </p>
        <button type="submit" class="  py-2 text-white text-sm cursor-pointer rounded bg-green-600  hover:bg-success-700 px-8">تقديم الطلب </button>
      </div>
    </form>
    <div class="w-full p-6 pt-0" >
      <ul class="bg-primary w-full md:w-2/3 mx-auto p-3 text-white text-sm leading-8">
        <li class="flex justify-start items-center gap-2 mb-1">
          <span> تأكد من وضع صورة شخصية احترافية رسمية لك يظهر فيها وجهك بوضوح  </span>
        </li>
        <li class="flex justify-start items-center gap-2 mb-1">
          <span> تأكد من ملئ <a href="my_account_settings.html"  class="underline underline-offset-2">بيانات</a> كالمسمى الوظيفي ونبذة عنك والمهارات الشخصية وغيرها    </span>
        </li>
        <li class="flex justify-start items-center gap-2 mb-1">
          <span>  تأكد من أن اسم حسابك مطابق لاسمك في بطاقة تعريف الهوية </span>
        </li>
        <li class="flex justify-start items-center gap-2 mb-1">
          <span> قم بإضافة <a href="my_portfolio.html" class="underline underline-offset-2">سابقة أعمالك</a> لزيادة فرصة توظيفك      </span>
        </li>
      </ul>
    </div>
  </div>
</div>
