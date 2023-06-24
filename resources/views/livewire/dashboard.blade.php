@section('title','لوحة التحكم')

<div id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab" class="">
    <!-- the tabulation section -->
    <div class="w-full">
        <div class="bg-white  rounded grid grid-cols-3 border-b">
            <div class="flex flex-col justify-center items-center gap-2 border-l p-2">
                <span>الرصيد الكلي</span>
                <strong class="text-primaryTextColor text-2xl">$ 99,0 </strong>
            </div>
            <div class="flex flex-col justify-center items-center gap-2 border-l p-2">
                <span>الرصيد القابل للسحب</span>
                <strong class="text-primaryTextColor text-2xl">$ 99,0 </strong>
            </div>
            <a href="" class="p-2 text-md md:text-xl text-white bg-primaryTextColor justify-center flex items-center">
                <span>عرض الرصيد</span>
            </a>
        </div>
        <!-- my projects -->
        <div class="w-full mt-4">
            <div class="bg-white rounded ">
                <h2 class="border-b p-2 px-6 text-md">مشاريعي</h2>
                <!-- statistics -->
                <div class="flex justify-center gap-2 p-6">
                    <div class="w-full md:w-1/3 flex flex-col items-center justify-center">
                        <div class="mb-3 flex items-center justify-center" x-data="{ circumference: 2 * 22 / 7 * 120 }">
                            <svg class="transform -rotate-90 w-12 h-12">
                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="30"
                                    fill="transparent" class="text-gray-100" />

                                <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="30"
                                    fill="transparent" :stroke-dasharray="circumference"
                                    :stroke-dashoffset="circumference - 2 / 100 * circumference"
                                    class="text-primaryTextColor" />
                            </svg>
                            <span class="absolute text-5xl" x-text="`25%`"></span>
                        </div>
                        <!--add new project  -->
                        <a href="{{route('add_project')}}" class="outline-btn flex justify-start gap-x-2 mt-2 mx-auto">
                            <svg class="h-5 w-5 " viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            <span>مشروع جديد</span>
                        </a>
                    </div>
                    <!-- progress bars -->
                    <div class="w-full md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="text-sm ">
                            <h6 class="mb-3">المفتوحة
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">المرفوضة
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">بانتظار المرجعة
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">المكتملة
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3"> قيد التنفيذ
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3"> الملغية
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">المغلقة
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">الاجمالي
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- my offers -->
        <div class="w-full mt-4">
            <div class="bg-white rounded ">
                <h2 class="border-b p-2 px-6 text-md">عروضي</h2>
                <!-- statistics -->
                <div class="flex justify-center gap-2 p-6">
                    <div class="w-full md:w-1/3 flex flex-col items-center justify-center">

                        <!--add new project  -->
                        <a href="projects.html" class="outline-btn flex justify-start gap-x-2 mt-2 mx-auto">
                            <svg class="h-5 w-5 " viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            <span> عرض جديد</span>
                        </a>
                    </div>
                    <!-- progress bars -->
                    <div class="w-full md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="text-sm ">
                            <h6 class="mb-3">بانتظار الموافقة
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">قيد التنفيذ
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">المستبعدة
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">المنجزة
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>