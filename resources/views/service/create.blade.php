@extends('layouts.app')
@section('title','إضافة خدمة')
@section('content')
<div>
    @livewire('breadcrumb', ['first_link' => 'home','first_link_title'=>'خدمات','second_link_title'=>'إضافة طلب خدمة'])
    <section class="px-4 md:px-14 pb-16  bg-body text-gray-700 relative overflow-hidden ">
        <!-- <h2 class="text-2xl">إضافة مشروع</h2> -->
        <div class="md:flex justify-between items-start gap-4">
          
            <livewire:add-service>
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