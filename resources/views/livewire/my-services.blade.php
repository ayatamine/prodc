@section('title','مشاريعي')
<div id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab" class="">
    <div class="bg-white p-2 rounded flex justify-between items-center  ">
        <h2 class=" px-6 text-md">حقيبة المشاريع</h2>
        <a href="add_project.html" class="md-button primary-btn">إضافة مشروع</a>
    </div>
    <div class="w-full">
        <!-- my projects -->
        <div class="w-full mt-4">
            <div class="flex items-center mb-2 p-4 border rounded bg-white shadow-lg">
                <div class="flex-1">
                    <div class="flex items-center justify-between"
                        x-data="{ showReportModel : false ,toggle() { this.showReportModel = ! this.showReportModel } }"
                        class=" overflow-y-scroll">
                        <a href="professional_details.html" class="text-smd md:text-base  text-primaryTextColorDarken">
                            كتابة وتنسيق محتوى
                        </a>

                        <div>
                            <span class="text-sm ">الميزانية:</span>
                            <span class="text-primaryTextColor font-bold text-lg"> 75 €</span>
                        </div>
                    </div>
                    <!-- short description -->
                    <p class="text-ellipsis overflow-hidden text-sm my-3 leading-8">
                        <span class="block">ارغب في التعاون مع مستقل لغرض تنسيق كتاب عائلي مطلو من المستقل المراجعة
                            اللغوية ب بصيغة psd و pdfتقل بالمحتوى المطلوب كتابة الاطلاع بشكل عميق على المحتوي وفهمه فهما
                            جيدا يجب
                            ...</span>
                    </p>
                    <div class="grid grid-cols-2 md:flex items-center gap-1 gap-y-2 justify-start gap-x-3 p-1 border">
                        <a href="professional_details.html"
                            class="flex items-center gap-1 text-sm hover:text-primaryTextColor">
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span>عياط احمد امين</span>
                        </a>
                        <div class="flex items-center gap-1 text-sm ">
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>منذ 30 دقيقة</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm ">
                            <svg class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>مغلق</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm ">
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <span>5 عروض</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full mt-4">
            <div class="flex items-center mb-2 p-4 border rounded bg-white shadow-lg">
                <div class="flex-1">
                    <div class="flex items-center justify-between"
                        x-data="{ showReportModel : false ,toggle() { this.showReportModel = ! this.showReportModel } }"
                        class=" overflow-y-scroll">
                        <a href="professional_details.html" class="text-smd md:text-base  text-primaryTextColorDarken">
                            كتابة وتنسيق محتوى
                        </a>

                        <div>
                            <span class="text-sm ">الميزانية:</span>
                            <span class="text-primaryTextColor font-bold text-lg"> 75 €</span>
                        </div>
                    </div>
                    <!-- short description -->
                    <p class="text-ellipsis overflow-hidden text-sm my-3 leading-8">
                        <span class="block">ارغب في التعاون مع مستقل لغرض تنسيق كتاب عائلي مطلو من المستقل المراجعة
                            اللغوية ب بصيغة psd و pdfتقل بالمحتوى المطلوب كتابة الاطلاع بشكل عميق على المحتوي وفهمه فهما
                            جيدا يجب
                            ...</span>
                    </p>
                    <div class="grid grid-cols-2 md:flex items-center gap-1 gap-y-2 justify-start gap-x-3 p-1 border">
                        <a href="professional_details.html"
                            class="flex items-center gap-1 text-sm hover:text-primaryTextColor">
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span>عياط احمد امين</span>
                        </a>
                        <div class="flex items-center gap-1 text-sm ">
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>منذ 30 دقيقة</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm ">
                            <svg class="h-4 w-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>قيد التنفيذ</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm ">
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <span>5 عروض</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full mt-4">
            <div class="flex items-center mb-2 p-4 border rounded bg-white shadow-lg">
                <div class="flex-1">
                    <div class="flex items-center justify-between"
                        x-data="{ showReportModel : false ,toggle() { this.showReportModel = ! this.showReportModel } }"
                        class=" overflow-y-scroll">
                        <a href="professional_details.html" class="text-smd md:text-base  text-primaryTextColorDarken">
                            كتابة وتنسيق محتوى
                        </a>

                        <div>
                            <span class="text-sm ">الميزانية:</span>
                            <span class="text-primaryTextColor font-bold text-lg"> 75 €</span>
                        </div>
                    </div>
                    <!-- short description -->
                    <p class="text-ellipsis overflow-hidden text-sm my-3 leading-8">
                        <span class="block">ارغب في التعاون مع مستقل لغرض تنسيق كتاب عائلي مطلو من المستقل المراجعة
                            اللغوية ب بصيغة psd و pdfتقل بالمحتوى المطلوب كتابة الاطلاع بشكل عميق على المحتوي وفهمه فهما
                            جيدا يجب
                            ...</span>
                    </p>
                    <div class="grid grid-cols-2 md:flex items-center gap-1 gap-y-2 justify-start gap-x-3 p-1 border">
                        <a href="professional_details.html"
                            class="flex items-center gap-1 text-sm hover:text-primaryTextColor">
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span>عياط احمد امين</span>
                        </a>
                        <div class="flex items-center gap-1 text-sm ">
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>منذ 30 دقيقة</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm ">
                            <svg class="h-4 w-4 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>بانتظار الموافقة</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm ">
                            <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            <span>0 عروض</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>