@section('title','رصيدي')
<div class="w-full mt-4">
    <div class="bg-white rounded ">
        <h2 class="border-b px-6 py-2 text-md flex justify-between items-center ">
            <span class=" p-2 ">رصيد الحساب</span>
            <div class="flex justify-between gap-2"
                x-data="{showWithdrowBallance:false,showCreditBallance:false,toggle() { this.showReportModel = ! this.showReportModel } }">
                <button @click="showWithdrowBallance= true" class="md-button primary-btn">سحب الرصيد</button>
                <!-- Modal Background -->
                <div x-show="showWithdrowBallance" @click.self="toggle()"
                    class="fixed text-gray-500 overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0 h-screen flex items-center"
                    x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <div class="w-full md:w-2/3 mx-auto z-20 inset-0 bg-white rounded">
                        <h2 class="border-b p-3 text-md flex  justify-between items-center  ">
                            <span class=" p-2 ">سحب الرصيد</span>
                            <button @click="showWithdrowBallance=false">
                                <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </h2>
                        <form class="bg-white p-6">
                            <div class="flex justify-start items-center gap-3">
                                <div class=" mb-5 md:mb-0 w-full md:w-1/3">
                                    <label for="specialitye" class=" my-2 flex" style="margin-bottom: 11px;">
                                        <span>وسيلة السحب</span>
                                        <span class="text-red-600 text-xl font-bold mr-2">*</span>
                                    </label>
                                    <select class="white-input-theme overflow-y-visible" id="speciality" style="    padding: 0.22rem;
                       margin-bottom: 0.2rem;">
                                        <option value="inge">بيبال</option>
                                        <option value="dedi">كاش sq</option>
                                    </select>
                                </div>
                                <div class="w-full md:w-1/3">
                                    <label for="withdrow-ballance" class=" my-2 flex">
                                        <span>المبلغ المطلوب</span>
                                        <span class="text-red-600 text-xl font-bold mr-2">*</span>
                                    </label>
                                    <div class="flex itmes-center">
                                        <input type="number" class="white-input-theme w-10/12" id="withdrow-ballance"
                                            type="button" value="">
                                        <span
                                            class="bg-body w-2/12 text-sm text-center leading-[2rem] border-l border-y border-gray-400 حف-1">الأورو</span>

                                    </div>

                                </div>
                            </div>
                        </form>
                        <h6 class="mx-6 my-4 text-sm">
                            الرصيد القابل للسحب حاليا هو
                            <span class=" text-green-600 font-semibold">35 اورو</span>
                        </h6>
                        <!-- div with faq questions footer-->
                        <div x-data="{showFaqSection:false,toggle(){this.showFaqSection = !this.showFaqSection}}">
                            <div class="flex justify-between items-center gap border-t mt-6 py-3 px-6">
                                <h6 class="text-sm text-green-600 flex  items-center justify-start gap-2">
                                    <span>
                                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span>
                                        الحد الأدنى لعملية السحب هو 25 دولار
                                    </span>
                                </h6>

                                <div class="flex justify-between gap-2 items-center">
                                    <button @click.prevent="toggle()" class="bg-blue-200 border border-blue-500">
                                        <svg class="h-8 w-8 text-blue-500 mx-auto" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>

                                    <button type="submit" class="w-auto md-button primary-btn">
                                        تأكيد السحب
                                    </button>
                                </div>
                            </div>
                            <!-- faq questions -->
                            <div class="p-6" x-show="showFaqSection">
                                <div x-data="{open:false}" class="border-b py-3 mb-2">
                                    <h2 class="text-smd flex justify-between items-center cursor-pointer"
                                        @click.prevent="open = !open">
                                        <span>هل يمكنني ربح مبالغ مالية دون انجاز مشاريع أو تقديم خدمات مصغرة ؟</span>
                                        <svg class="h-5 w-5" x-show="!open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 9 12 15 18 9" />
                                        </svg>
                                        <svg class="h-5 w-5" x-show="open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 15 12 9 18 15" />
                                        </svg>
                                    </h2>
                                    <div class="mt-3 py-2 text-sm leading-9" x-show="open"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        بكل تأكيد يمكنك الاستفادة من التسويق بالعمولة عبر تسويق الخدمات وبداية استلام
                                        المبالغ المالية عبر نظام التسويق بالعمولة في لوحة التحكم الخاصة بك . من هنا
                                        لمزيد من التفاصيل ستجدها هنا .
                                    </div>
                                </div>
                                <!-- question here -->
                                <div x-data="{open:false}" class="border-b py-3  mb-2">
                                    <h2 class="text-smd flex justify-between items-center cursor-pointer"
                                        @click.prevent="open = !open">
                                        <span>متى يصبح الرصيد المكتسب من التوظيف أو بيع الخدمات متاحاً ؟</span>
                                        <svg class="h-5 w-5" x-show="!open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 9 12 15 18 9" />
                                        </svg>
                                        <svg class="h-5 w-5" x-show="open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 15 12 9 18 15" />
                                        </svg>
                                    </h2>
                                    <div class="mt-3 py-2 text-sm leading-9" x-show="open"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        يتحول الرصيد من معلق إلى قابل للسحب بعد مرور 14 يوم من لحظة استلام الخدمة او
                                        استلام الخدمة من قبل العميل . وهي مدة حماية المستهلك طبقاً للقوانين الدولية .
                                    </div>
                                </div>
                                <!-- question here  -->
                                <div x-data="{open:false}" class="border-b py-3 mb-2">
                                    <h2 class="text-smd flex justify-between items-center cursor-pointer"
                                        @click.prevent="open = !open">
                                        <span>لقد قمت بشحن مبلغ مالي وأردت سحبه مرة أخرى الرصيد غير قابل للسحب ؟</span>
                                        <svg class="h-5 w-5" x-show="!open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 9 12 15 18 9" />
                                        </svg>
                                        <svg class="h-5 w-5" x-show="open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 15 12 9 18 15" />
                                        </svg>
                                    </h2>
                                    <div class="mt-3 py-2 text-sm leading-9" x-show="open"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        بكل تأكيد يمكنك استرجاع مبلغ قمت بشحنه عبر المنصة وذلك قبل مرور 90 يوم على عملية
                                        الشحن . وذلك عبر التواصل معنا ، حيث أننا نقوم بعملية ارجاع المبلغ Refund على نفس
                                        الوسيلة المستخدمة في عملية الشحن بنفس مبلغ الشحن .
                                    </div>
                                </div>
                                <!-- question here  -->
                                <div x-data="{open:false}" class="border-b py-3 mb-2">
                                    <h2 class="text-smd flex justify-between items-center cursor-pointer"
                                        @click.prevent="open = !open">
                                        <span>ماذا أفعل إذا واجهتني أي مشكلة اثناء عملية السحب أو كان لدي أي استفسار آخر
                                            ؟</span>
                                        <svg class="h-5 w-5" x-show="!open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 9 12 15 18 9" />
                                        </svg>
                                        <svg class="h-5 w-5" x-show="open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 15 12 9 18 15" />
                                        </svg>
                                    </h2>
                                    <div class="mt-3 py-2 text-sm leading-9" x-show="open"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        ستجدنا في خدمتك على مدار الساعة للرد على أي استفسارات لك عبر التواصل معنا ، كذلك
                                        قد أجبنا على العديد من الاستفسارات التي قد تدور في ذهنك من <a
                                            href="faqs.html">هنا</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button @click="showCreditBallance= true" class=" md-button success-btn "> شحن الرصيد</button>
                <!-- Modal Background -->
                <div x-show="showCreditBallance" @click.self="showCreditBallance=false"
                    class="fixed text-gray-500 overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0 h-screen flex items-center"
                    x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <div class="w-full md:w-2/3 mx-auto z-20 inset-0 bg-white rounded">
                        <h2 class="border-b p-3 text-md flex  justify-between items-center  ">
                            <span class=" p-2 ">شحن الرصيد</span>
                            <button @click="showCreditBallance=false">
                                <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </h2>
                        <form class="bg-white p-6">
                            <div class="flex justify-start items-center gap-3">
                                <div class=" mb-5 md:mb-0 w-full md:w-1/3">
                                    <label for="specialitye" class=" my-2 flex" style="margin-bottom: 11px;">
                                        <span>وسيلة الدفع</span>
                                        <span class="text-red-600 text-xl font-bold mr-2">*</span>
                                    </label>
                                    <select class="white-input-theme overflow-y-visible" id="speciality" style="    padding: 0.22rem;
                       margin-bottom: 0.2rem;">
                                        <option value="inge">بيبال</option>
                                        <option value="dedi">كاش sq</option>
                                    </select>
                                </div>
                                <div class="w-full md:w-1/3">
                                    <label for="withdrow-ballance" class=" my-2 flex">
                                        <span>المبلغ </span>
                                        <span class="text-red-600 text-xl font-bold mr-2">*</span>
                                    </label>
                                    <div class="flex itmes-center">
                                        <input type="number" class="white-input-theme w-10/12" id="withdrow-ballance"
                                            type="button" value="">
                                        <span
                                            class="bg-body w-2/12 text-sm text-center leading-[2rem] border-l border-y border-gray-400 حف-1">الأورو</span>

                                    </div>

                                </div>
                            </div>
                        </form>
                        <h6 class="mx-6 my-4 text-sm">
                            المبلغ النهائي بعد إضافة رسوم الدفع
                            <span class=" text-green-600 font-semibold">10.2 اورو</span>
                        </h6>
                        <!-- div with faq questions footer-->
                        <div x-data="{showFaqSection:false,toggle(){this.showFaqSection = !this.showFaqSection}}">
                            <div class="flex justify-between items-center gap border-t mt-6 py-3 px-6">
                                <h6 class="text-sm text-green-600 flex  items-center justify-start gap-2">
                                    <span>
                                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span>
                                        ادفع بأمان، اتصالك مشفر ومحمي
                                    </span>
                                </h6>

                                <div class="flex justify-between gap-2 items-center">
                                    <button @click.prevent="toggle()" class="bg-blue-200 border border-blue-500">
                                        <svg class="h-8 w-8 text-blue-500 mx-auto" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>

                                    <button type="submit" class="w-auto md-button primary-btn">
                                        شحن الرصيد
                                    </button>
                                </div>
                            </div>
                            <!-- faq questions -->
                            <div class="p-6" x-show="showFaqSection">
                                <div x-data="{open:false}" class="border-b py-3 mb-2">
                                    <h2 class="text-smd flex justify-between items-center cursor-pointer"
                                        @click.prevent="open = !open">
                                        <span>ماذا افعل إذا واجهتني مشكلة في الدفع ؟</span>
                                        <svg class="h-5 w-5" x-show="!open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 9 12 15 18 9" />
                                        </svg>
                                        <svg class="h-5 w-5" x-show="open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 15 12 9 18 15" />
                                        </svg>
                                    </h2>
                                    <div class="mt-3 py-2 text-sm leading-9" x-show="open"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        إذا واجهتك أي مشكلة في الدفع او السحب لا تتردد ابداً في التواصل معنا ، كذلك قد
                                        أجبنا على العديد من الاستفسارات التي قد تدور في ذهنك من هنا
                                    </div>
                                </div>
                                <!-- question here -->
                                <div x-data="{open:false}" class="border-b py-3  mb-2">
                                    <h2 class="text-smd flex justify-between items-center cursor-pointer"
                                        @click.prevent="open = !open">
                                        <span>هل يمكنني رد مبلغ قمت بشحنه مرة اخرى لعدم ايجادي منفذ مناسب ؟</span>
                                        <svg class="h-5 w-5" x-show="!open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 9 12 15 18 9" />
                                        </svg>
                                        <svg class="h-5 w-5" x-show="open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 15 12 9 18 15" />
                                        </svg>
                                    </h2>
                                    <div class="mt-3 py-2 text-sm leading-9" x-show="open"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        يتحول الرصيد من معلق إلى قابل للسحب بعد مرور 14 يوم من لحظة استلام الخدمة او
                                        استلام الخدمة من قبل العميل . وهي مدة حماية المستهلك طبقاً للقوانين الدولية .
                                    </div>
                                </div>
                                <!-- question here  -->
                                <div x-data="{open:false}" class="border-b py-3 mb-2">
                                    <h2 class="text-smd flex justify-between items-center cursor-pointer"
                                        @click.prevent="open = !open">
                                        <span>هل توجد وسائل دفع اخرى ؟</span>
                                        <svg class="h-5 w-5" x-show="!open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 9 12 15 18 9" />
                                        </svg>
                                        <svg class="h-5 w-5" x-show="open" width="24" height="24" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <polyline points="6 15 12 9 18 15" />
                                        </svg>
                                    </h2>
                                    <div class="mt-3 py-2 text-sm leading-9" x-show="open"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95">
                                        توجد وسائل اخرى لاستقبال الاموال مثل Payeer على ان يقوم مرسل المبلغ بارسال
                                        المبلغ مضافاً اليه رسوم بوابات الدفع , كما توجد وسائل دفع محلية في مصر : مثل
                                        فودافون كاش و اورنج ماني </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </h2>
        <div class="bg-white  rounded grid grid-cols-1 md:grid-cols-4 px-2 py-6">

            <div class="flex flex-col justify-center items-center gap-2 border-l p-2">
                <span>الرصيد القابل للسحب</span>
                <strong class="text-primaryTextColor text-2xl">$ 99,0 </strong>
            </div>
            <div class="flex flex-col justify-center items-center gap-2 border-l p-2">
                <span>الرصيد المعلق</span>
                <strong class="text-primaryTextColor text-2xl">$ 99,0 </strong>
            </div>
            <div class="flex flex-col justify-center items-center gap-2 border-l p-2">
                <span>الرصيد المتاح</span>
                <strong class="text-primaryTextColor text-2xl">$ 99,0 </strong>
            </div>
            <div class="flex flex-col justify-center items-center gap-2 p-2">
                <span class="font-bold">الرصيد الكلي</span>
                <strong class="text-green-500 text-3xl">$ 99,0 </strong>
            </div>
        </div>
        <!-- alert of ballance -->
        <div class=" mx-auto text-center p-6 mt-4">
            <div class="max-w-lg mx-auto bg-blue-100 border-t-4 border-blue-500 rounded-b text-blue-900 px-4 py-3 shadow-md"
                role="alert">
                <div class="py-1">
                    <svg class="h-12 w-12 text-blue-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="flex">

                    <div>
                        <p class="text-sm leading-8">
                            صفحة الرصيد تحتوي على ملخص للرصيد الموجود في حسابك سواء الذي قمت بشحنه أو قمت ببدئ صفقات به
                            أو حتى ربحته من بيع أحد الخدمات أو تنفيذ المشاريع ، مع العلم أنه يمكنك استرداد المبالغ
                            المشحونة أو أجزاء منها في حالة لم تجد المنفذ المناسب لأعمالك في أي وقت على نفذلي
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>