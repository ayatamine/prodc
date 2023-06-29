@section('title',trans('frontend.login'))

<div class=" bg-body p-6 py-16 md:py-16 px-8">

  <div class="lg:flex my-3 bg-white rounded shadow-lg overflow-hidden mx-auto max-w-5xl lg:max-w-7xl">
    <div  wire:ignore class="w-full border-l  lg:w-1/3 bg-cover text-center md:flex md:flex-col justify-center p-16 lg:p-0">
      <img data-src="{{asset('assets/images/logo/logonew.jpg')}}" class="lozad h-64 w-64 drop-shadow-md mx-auto"
        alt="شعار المحترف القوي الأمين">
      <p class="text-lg my-6">نتعامل بالإحسان : صدق، أمانة وإتقان</p>
      <a href="" @click.prevent=""
        class="flex text-sm md:text-base mt-6 text-primaryTextColor border border-primaryTextColor shadow-md w-max mx-auto p-2 px-3 animate-bounce ">
        <span> انضم إلينا الآن</span>
        <svg class="h-6 w-6 mr-2 " width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
          fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" />
          <line x1="5" y1="12" x2="19" y2="12" />
          <line x1="5" y1="12" x2="9" y2="16" />
          <line x1="5" y1="12" x2="9" y2="8" />
        </svg>
      </a>
    </div>
    <div class="w-full p-8 md:px-16 lg:w-2/3">


      <div class="forms border p-2 py-6">
        <p class="text-xl text-primaryTextColor font-semibold text-center leading-tight">يمكنك استعمال</p>
        <div class="flex justify-center gap-x-3   lg:grid-cols-3 gap-3 my-4">
          <a href="{{ url('auth/google') }}"
            class="flex items-center justify-center my-2 text-white  h-12 w-12 md:h-auto md:w-auto rounded-full border shadow-md hover:bg-gray-100">
            <div class="md:p-1 ">
              <svg class="h-11 w-11 " viewBox="0 0 40 40">
                <path
                  d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                  fill="#FFC107" />
                <path
                  d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                  fill="#FF3D00" />
                <path
                  d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                  fill="#4CAF50" />
                <path
                  d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                  fill="#1976D2" />
              </svg>
            </div>
            <h1 class="hidden px-3 py-2 w-5/6 text-start text-gray-600 font-bold text-sm md:text-smd"> قوقل</h1>
          </a>
          <a href="#"
            class="flex items-center justify-center my-2 text-white   h-12 w-12 md:h-auto md:w-auto rounded-full  border shadow-md hover:bg-gray-100">
            <div class="md:p-1 ">
              <svg class="h-11 w-11  " xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                viewBox="0 0 48 48">
                <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                <path fill="#fff"
                  d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z">
                </path>
              </svg>
            </div>
            <h1 class="hidden px-3 py-2 w-5/6 text-start text-gray-600 font-bold text-sm md:text-smd"> فيسبوك</h1>
          </a>
          <a href="#"
            class="flex items-center justify-center my-2 text-white   h-12 w-12 md:h-auto md:w-auto rounded-full  border shadow-md hover:bg-gray-100">
            <div class="md:p-1 ">
              <svg class="h-11 w-11  " width="64px" height="64px" viewBox="0 0 48 48" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <circle cx="24" cy="24" r="20" fill="#1DA1F2"></circle>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M36 16.3086C35.1177 16.7006 34.1681 16.9646 33.1722 17.0838C34.1889 16.4742 34.9697 15.5095 35.3368 14.36C34.3865 14.9247 33.3314 15.3335 32.2107 15.5551C31.3123 14.5984 30.0316 14 28.6165 14C25.8975 14 23.6928 16.2047 23.6928 18.9237C23.6928 19.3092 23.7368 19.6852 23.8208 20.046C19.7283 19.8412 16.1005 17.8805 13.6719 14.9015C13.2479 15.6287 13.0055 16.4742 13.0055 17.3766C13.0055 19.0845 13.8735 20.5916 15.1958 21.4747C14.3878 21.4491 13.6295 21.2275 12.9647 20.8587V20.9203C12.9647 23.3066 14.663 25.296 16.9141 25.7496C16.5013 25.8616 16.0661 25.9224 15.6174 25.9224C15.2998 25.9224 14.991 25.8912 14.6902 25.8336C15.3166 27.7895 17.1357 29.2134 19.2899 29.2534C17.6052 30.5733 15.4822 31.3612 13.1751 31.3612C12.7767 31.3612 12.3848 31.338 12 31.2916C14.1791 32.6884 16.7669 33.5043 19.5475 33.5043C28.6037 33.5043 33.5562 26.0016 33.5562 19.4956C33.5562 19.282 33.5522 19.0693 33.5418 18.8589C34.5049 18.1629 35.34 17.2958 36 16.3086Z"
                    fill="white"></path>
                </g>
              </svg>
            </div>
            <h1 class="hidden px-3 py-2 w-5/6 text-start text-gray-600 font-bold text-sm md:text-smd"> تويتر</h1>
          </a>
        </div>
        <div class="my-6 flex items-center justify-between">
          <span class="border-b w-1/5 lg:w-1/4"></span>
          <span class="text-sm text-center text-gray-500 uppercase">{{trans('frontend.or_login_using_email')}}</span>
          <span class="border-b w-1/5 lg:w-1/4"></span>
        </div>
        <form wire:submit.prevent="authenticate" class="p-3">
  
          <div class="  mt-4">
            <label for="email" class=" my-2 flex  text-sm md:text-base">
              <span>البريد الإلكتروني</span>
              <span class="text-red-600 text-xl font-bold mr-2">*</span>
            </label>
            <input wire:model="email" type="text" class="white-input-theme" required value="" />
            @error('email')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>
          <div class="password  mt-4">
            <label for="password" class=" my-2 flex text-sm md:text-base">
              <span>كلمة السر</span>
              <span class="text-red-600 text-xl font-bold mr-2">*</span>
            </label>
            <input wire:model.lazy="password" type="password" class="white-input-theme" required value="" />
            @error('password')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
          </div>
          <div class=" mt-5">
            <div class="g-recaptcha" data-sitekey="6LcQCGgmAAAAAPHKsHGGKQAEYjIon_sc519AIfVW"></div>
          </div>
          <div class="flex items-center gap-2 text-sm md:text-md  mt-5">
            <input wire:model="remember" type="checkbox" name="remember" id="remember"
              class="border-gray-300 rounded h-5 md:h-4 w-5 md:w-4" />
              <label for="remember">{{trans('forms.remember')}}        </label>
            @error('remember')
            <p class="mt-2 text-sm text-red-600 flex-none">{{ $message }}</p>
            @enderror
          </div>
          <div class="flex items-center gap-2 text-sm md:text-md  mt-5">
            <input wire:model="conditions" type="checkbox" name="conditions" id="conditions"
              class="border-gray-300 rounded h-5 md:h-4 w-5 md:w-4" />
              <label for="conditions">{{trans('frontend.sware_to_be_ethiks')}}      </label>
            @error('conditions')
            <p class="mt-2 text-sm text-red-600 flex-none">{{ $message }}</p>
            @enderror
          </div>
          <div class="mt-8">
            <x-submit-button :title="trans('frontend.login')" target="authenticate" extraClasses=""/>
          </div>
        </form>

      </div>
      <div class="mt-4 flex items-center justify-between text-primaryTextColor font-semibold">
        <span class="border-b w-1/6 md:w-1/4"></span>
        <a href="{{route('register')}}" class="text-sm  uppercase">
             <span class="text-gray-700 mx-1"> {{trans('frontend.have_no_account')}} </span>
             {{trans('frontend.register')}}
        </a>
        <span class="border-b w-1/6 md:w-1/4"></span>
      </div>
      <div class="mt-4 flex ltr:flex-row items-center justify-center text-theme font-semibold">
        <svg class="h-5 w-5 text-theme" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
          stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" />
          <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
        </svg>
        <a href="{{route('home')}}" class="text-sm  uppercase"> العودة للرئيسية</a>
      </div>
    </div>
  </div>
  <p class="my-6 text-center">جميع الحقوق محفوظة موقع المحترف القوي الأمين</p>
</div>
@push('scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush