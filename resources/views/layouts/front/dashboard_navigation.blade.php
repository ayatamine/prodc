<div class="w-full md:w-3/12    mt-2 pt-2 lg:mt-0 z-20" id="nav-content">
    <!-- user avatar -->
   <livewire:dashboard.profile-picture/>
    <!-- user links -->
    <div class="mt-6" x-data="{show:false}">
      <h3 class="text-smd md:text-md my-3  text-gray-800 hidden md:block">{{trans('frontend.dashboard')}} </h3>
      <ul class="list-reset hidden md:grid grid-cols-3 gap-2  px-4 md:px-0" >
        <li class="">
          <a href="{{route('dashboard')}}" class="dashboard-tab @if(Request::segment(1) =='dashboard') active @endif hover:bg-primary hover:text-white" >
          <svg class="h-6 w-6 mb-2"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="5 12 3 12 12 3 21 12 19 12" />  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
            
            <span class="pb-1 md:pb-0 text-sm">{{trans('frontend.main')}}</span>
          </a>
        </li>  
        <li class="" role="presentation">
              <a href="{{route('personal_data')}}" class="dashboard-tab  @if(Request::segment(1) =='profile') active @endif" >
                <svg class="h-6 w-6 mb-2"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="7" r="4" />  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                
                <span class="pb-1 md:pb-0 text-sm">{{trans('frontend.my_account')}}</span>
              </a>
        </li>
        @professional
        <li class="" role="presentation">
              <a href="{{route('pay_commission')}}" class="dashboard-tab @if(Request::segment(2) =='ballance') active @endif hover:bg-primary hover:text-white" >
                <svg class="h-6 w-6 mb-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                </svg>
                
                <span class="pb-1 md:pb-0 text-sm">{{trans('frontend.pay_commission')}}</span>
              </a>
        </li>
        @endprofessional
        <li class="" role="presentation">
              <a href="{{route('my_services')}}" class="dashboard-tab  @if(Request::segment(2) =='projects') active @endif hover:bg-primary hover:text-white" >
                <svg class="h-6 w-6 mb-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>

                <span class="pb-1 md:pb-0 text-sm">{{trans('frontend.my_services')}}</span>
              </a>
        </li>
        @professional
        <li class="" role="presentation">
          
              <a href="{{route('my_portfolios')}}" class="dashboard-tab  @if(Request::segment(2) =='portfolios') active @endif hover:bg-primary hover:text-white" >
                <svg class="h-6 w-6 mb-2"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="15" y1="6" x2="15.01" y2="6" />  <rect x="3" y="3" width="18" height="14" rx="3" />  <path d="M3 13l4 -4a3 5 0 0 1 3 0l 4 4" />  <path d="M13 12l2 -2a3 5 0 0 1 3 0l 3 3" />  <line x1="8" y1="21" x2="8.01" y2="21" />  <line x1="12" y1="21" x2="12.01" y2="21" />  <line x1="16" y1="21" x2="16.01" y2="21" /></svg>
                
                <span class="pb-1 md:pb-0 text-sm">{{trans('frontend.my_works')}}</span>
              </a>
        </li>
        @else
        <li class="" role="presentation">
          
              <a href="{{route('saved_works')}}" class="dashboard-tab  @if(Request::segment(2) =='portfolios') active @endif hover:bg-primary hover:text-white" >
                <svg class="h-6 w-6 mb-2"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="15" y1="6" x2="15.01" y2="6" />  <rect x="3" y="3" width="18" height="14" rx="3" />  <path d="M3 13l4 -4a3 5 0 0 1 3 0l 4 4" />  <path d="M13 12l2 -2a3 5 0 0 1 3 0l 3 3" />  <line x1="8" y1="21" x2="8.01" y2="21" />  <line x1="12" y1="21" x2="12.01" y2="21" />  <line x1="16" y1="21" x2="16.01" y2="21" /></svg>
                
                <span class="pb-1 md:pb-0 text-sm">{{trans('frontend.works')}}</span>
              </a>
        </li>
        @endif

        <li class="" role="presentation">
              <a href="{{route('my_tickets')}}" class="dashboard-tab  @if(Request::segment(2) =='tikets') active @endif hover:bg-primary hover:text-white" >
                <svg class="h-6 w-6 mb-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                </svg>
                
                <span class="pb-1 md:pb-0 text-sm">تذاكري</span>
              </a>
        </li>
        <li class="" role="presentation">
              <a href="{{route('my_verifications')}}" class="dashboard-tab  @if(Request::segment(2) =='verifications') active @endif hover:bg-primary hover:text-white" >
                <svg class="h-6 w-6 mb-2" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.007 8.27C22.194 9.125 23 10.45 23 12c0 1.55-.806 2.876-1.993 3.73.24 1.442-.134 2.958-1.227 4.05-1.095 1.095-2.61 1.459-4.046 1.225C14.883 22.196 13.546 23 12 23c-1.55 0-2.878-.807-3.731-1.996-1.438.235-2.954-.128-4.05-1.224-1.095-1.095-1.459-2.611-1.217-4.05C1.816 14.877 1 13.551 1 12s.816-2.878 2.002-3.73c-.242-1.439.122-2.955 1.218-4.05 1.093-1.094 2.61-1.467 4.057-1.227C9.125 1.804 10.453 1 12 1c1.545 0 2.88.803 3.732 1.993 1.442-.24 2.956.135 4.048 1.227 1.093 1.092 1.468 2.608 1.227 4.05Zm-4.426-.084a1 1 0 0 1 .233 1.395l-5 7a1 1 0 0 1-1.521.126l-3-3a1 1 0 0 1 1.414-1.414l2.165 2.165 4.314-6.04a1 1 0 0 1 1.395-.232Z" fill="#3eb142"></path></g></svg>

                
                <span class="pb-1 md:pb-0 text-sm">توثيقات</span>
              </a>
        </li>
      </ul>
      <div class="md:hidden flex justify-between items-center p-2 px-4 bg-white border rounded">
        <h3 class="text-sm md:text-md my-3  text-gray-800">{{trans('frontend.dashboard')}} </h3>
        <span class="cursor-pointer" @click.prevent="show = !show">
          <svg class="h-7 w-7"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </span>              
      </div>
      <ul x-show="show" class="list-reset grid grid-cols-3 gap-3 md:hidden py-4 " >
        <li class="">
          <a href="{{route('dashboard')}}" class="dashboard-tab  @if(Request::segment(1) =='dashboard') active @endif hover:bg-primary hover:text-white" >
          <svg class="h-6 w-6 mb-2"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="5 12 3 12 12 3 21 12 19 12" />  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
            
            <span class="pb-1 md:pb-0 text-sm">{{trans('frontend.main')}}</span>
          </a>
        </li>  
        <li class="" role="presentation">
              <a href="{{route('personal_data')}}" class="dashboard-tab  @if(Request::segment(1) =='profile') active @endif " >
                <svg class="h-6 w-6 mb-2"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="7" r="4" />  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                
                <span class="pb-1 md:pb-0 text-sm">{{trans('frontend.my_account')}}</span>
              </a>
        </li>
        @professional
        <li class="" role="presentation">
              <a href="{{route('pay_commission')}}" class="dashboard-tab  @if(Request::segment(2) =='ballance') active @endif hover:bg-primary hover:text-white" >
                <svg class="h-6 w-6 mb-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                </svg>
                
                <span class="pb-1 md:pb-0 text-sm">{{trans('frontend.pay_commission')}}</span>
              </a>
        </li>
        @endprofessional
        <li class="" role="presentation">
              <a href="{{route('my_services')}}" class="dashboard-tab  @if(Request::segment(2) =='projects') active @endif hover:bg-primary hover:text-white" >
                <svg class="h-6 w-6 mb-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>

                <span class="pb-1 md:pb-0 text-sm">{{trans('frontend.my_services')}}</span>
              </a>
        </li>
        <li class="" role="presentation">
              <a href="{{route('my_portfolios')}}" class="dashboard-tab @if(Request::segment(2) =='portfolios') active @endif  hover:bg-primary hover:text-white" >
                <svg class="h-6 w-6 mb-2"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="15" y1="6" x2="15.01" y2="6" />  <rect x="3" y="3" width="18" height="14" rx="3" />  <path d="M3 13l4 -4a3 5 0 0 1 3 0l 4 4" />  <path d="M13 12l2 -2a3 5 0 0 1 3 0l 3 3" />  <line x1="8" y1="21" x2="8.01" y2="21" />  <line x1="12" y1="21" x2="12.01" y2="21" />  <line x1="16" y1="21" x2="16.01" y2="21" /></svg>
                
                <span class="pb-1 md:pb-0 text-sm">{{trans('frontend.my_works')}}</span>
              </a>
        </li>
        <li class="" role="presentation">
              <a href="{{route('my_tickets')}}" class="dashboard-tab @if(Request::segment(2) =='tickets') active @endif  hover:bg-primary hover:text-white" >
                <svg class="h-6 w-6 mb-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                </svg>
                
                <span class="pb-1 md:pb-0 text-sm">تذاكري</span>
              </a>
        </li>
        <li class="" role="presentation">
              <a href="{{route('my_verifications')}}" class="dashboard-tab  @if(Request::segment(2) =='verifications') active @endif hover:bg-primary hover:text-white" >
                <svg class="h-6 w-6 mb-2" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.007 8.27C22.194 9.125 23 10.45 23 12c0 1.55-.806 2.876-1.993 3.73.24 1.442-.134 2.958-1.227 4.05-1.095 1.095-2.61 1.459-4.046 1.225C14.883 22.196 13.546 23 12 23c-1.55 0-2.878-.807-3.731-1.996-1.438.235-2.954-.128-4.05-1.224-1.095-1.095-1.459-2.611-1.217-4.05C1.816 14.877 1 13.551 1 12s.816-2.878 2.002-3.73c-.242-1.439.122-2.955 1.218-4.05 1.093-1.094 2.61-1.467 4.057-1.227C9.125 1.804 10.453 1 12 1c1.545 0 2.88.803 3.732 1.993 1.442-.24 2.956.135 4.048 1.227 1.093 1.092 1.468 2.608 1.227 4.05Zm-4.426-.084a1 1 0 0 1 .233 1.395l-5 7a1 1 0 0 1-1.521.126l-3-3a1 1 0 0 1 1.414-1.414l2.165 2.165 4.314-6.04a1 1 0 0 1 1.395-.232Z" fill="#3eb142"></path></g></svg>

                <span class="pb-1 md:pb-0 text-sm">توثيقات</span>
              </a>
        </li>
      </ul>
     
    </div>

</div>
