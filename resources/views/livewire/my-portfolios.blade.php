@section('title','أعمالي')
<div id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab" class="">
    <div class="bg-white p-2 rounded flex justify-between items-center  ">
        <h2 class=" px-6 text-md">معرض أعمالي</h2>
        <a href="add_work.html" class="md-button primary-btn">إضافة عمل</a>
    </div>
    <div class="w-full py-4 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-3">
        <!-- my works -->

        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
            <a href=""><img class="w-full" src="assets/images/blog/blog-02.jpg" alt="Your image alt text"></a>
            <div class="px-2 py-4">
                <a href="work_details.html" class="text-[14px] text-gray-900 mb-2">تصميم الصفحة الشخصية الخاصة بي كمطور
                    ويب باستخدام tailwind css</a>
                <div class="flex flex-wrap -mx-2 mt-2">
                    <a href=""
                        class="inline-block bg-gray-200 rounded px-2 py-1 text-[13px]  text-gray-700 mr-2 mb-2">#برمجة_المواقع</a>
                    <a href=""
                        class="inline-block bg-gray-200 rounded px-2 py-1 text-[13px]  text-gray-700 mr-2 mb-2">#تصميم</a>
                    <a href=""
                        class="inline-block bg-gray-200 rounded px-2 py-1 text-[13px]  text-gray-700 mr-2 mb-2">#tailwind</a>
                </div>
            </div>
        </div>
        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
            <a href=""><img class="w-full" src="assets/images/blog/blog-03.jpg" alt="Your image alt text"></a>
            <div class="px-2 py-4">
                <a href="work_details.html" class="text-[14px] text-gray-900 mb-2">تصميم الصفحة الشخصية الخاصة بي كمطور
                    ويب باستخدام tailwind css</a>
                <div class="flex flex-wrap -mx-2 mt-2">
                    <a href=""
                        class="inline-block bg-gray-200 rounded px-2 py-1 text-[13px]  text-gray-700 mr-2 mb-2">#برمجة_المواقع</a>
                    <a href=""
                        class="inline-block bg-gray-200 rounded px-2 py-1 text-[13px]  text-gray-700 mr-2 mb-2">#تصميم</a>
                    <a href=""
                        class="inline-block bg-gray-200 rounded px-2 py-1 text-[13px]  text-gray-700 mr-2 mb-2">#tailwind</a>
                </div>
            </div>
        </div>
    </div>
</div>