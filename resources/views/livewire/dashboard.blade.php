@section('title','لوحة التحكم')

<div id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab" class="">
    <!-- the tabulation section -->
    <div class="w-full">
        @if(auth()->user()->isInFreePackage())
        <div class="w-full mt-4">
            <div class="bg-white rounded ">
                <h2 class="border-b  px-6 text-md text-blue-600 p-3">
                    {{trans('frontend.free_plan_alert')}}
                    <a href="{{route('packages')}}" class="text-center bg-white text-sm underline px-2 py-0.5  text-sectionTitleColor border border-sectionTitleColor hover:bg-sectionTitleColor hover:text-white transition-colors duration-300">
                    {{trans('frontend.upgrade_now')}}
                    </a>
                </h2>
            </div>
        </div>
        @endif
        {{-- <div class="bg-white  rounded grid grid-cols-3 border-b">
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
        </div> --}}
        <!-- my projects -->
        <div class="w-full mt-4">
            <div class="bg-white rounded ">
                <h2 class="border-b p-2 px-6 text-md">{{trans('frontend.my_services')}}</h2>
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
                        <a href="{{route('add_service')}}" class="outline-btn flex justify-start gap-x-2 mt-2 mx-auto">
                            <svg class="h-5 w-5 " viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            <span>{{trans('frontend.new_service')}}</span>
                        </a>
                    </div>
                    <!-- progress bars -->
                    <div class="w-full md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.projects.open')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.projects.rejected')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.projects.pending')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.projects.completed')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3"> {{trans('frontend.projects.processing')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3"> {{trans('frontend.projects.canceled')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.projects.closed')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.projects.total')}}
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
                <h2 class="border-b p-2 px-6 text-md">{{trans('frontend.offers')}} </h2>
                <!-- statistics -->
                <div class="flex justify-center gap-2 p-6">
                    <div class="w-full md:w-1/3 flex flex-col items-center justify-center">
                        @professional
                        <!--add new project  -->
                        <a href="projects.html" class="outline-btn flex justify-start gap-x-2 mt-2 mx-auto">
                            <svg class="h-5 w-5 " viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            <span> {{trans('frontend.my_works')}} </span>
                        </a>
                        @else 
                        <a href="projects.html" class="outline-btn flex justify-start gap-x-2 mt-2 mx-auto">
                            {{-- <svg class="h-5 w-5 " viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg> --}}
                            <span> {{trans('frontend.browse_services')}} </span>
                        </a>
                        @endprofessional
                    </div>
                    @professional
                    <!-- progress bars -->
                    <div class="w-full md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.published')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.most_purshased')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.rated_more_4')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.projects.total')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                    @else 
                    <div class="w-full md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.featured')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.accepted')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.projects.rejected')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="text-sm ">
                            <h6 class="mb-3">{{trans('frontend.projects.total')}}
                                <span class="mx-3">2</span>
                            </h6>
                            <div class="shadow  bg-gray-100 h-2 rounded">
                                <div class="bg-primaryTextColor text-xs h-2 leading-4   text-center text-white"
                                    style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                    @endprofessional
                </div>
            </div>
        </div>
    </div>
</div>