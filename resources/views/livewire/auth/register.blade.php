@section('title','حساب جديد')

<div class=" bg-body p-6 py-16 md:py-16 px-8">

  <div class="lg:flex my-3 bg-white rounded shadow-lg overflow-hidden mx-auto max-w-5xl lg:max-w-7xl">
    <div class="w-full border-l  lg:w-1/3 bg-cover text-center md:flex md:flex-col justify-center p-16 lg:p-0">
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

      <p class="text-xl text-primaryTextColor font-semibold text-center leading-tight">يمكنك استعمال</p>
      <div class="flex justify-center gap-x-3   lg:grid-cols-3 gap-3 my-4">
        <a href="#"
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
        <span class="text-sm text-center text-gray-500 uppercase">أو قم بتسجيل حساب بالبريد</span>
        <span class="border-b w-1/5 lg:w-1/4"></span>
      </div>
      <div class="forms" x-data="{is_client_form:false}">
        <div class="flex justify-start items-center border border-b-0 ">
          <div @click="is_client_form=false"
            class="leading-8 md:leading-9 w-1/2 md:w-1/3 p-3  text-gray-600 font-semibold text-sm md:text-base cursor-pointer text-center flex justify-center flex-col md:flex-row items-center gap-2"
            :class="!is_client_form && 'bg-body'">
            <svg class="h-6 w-6 hidden md:block" width="64px" height="64px" viewBox="0 0 91 91"
              enable-background="new 0 0 91 91" id="Layer_1" version="1.1" xml:space="preserve"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <g>
                  <g>
                    <path
                      d="M38.391,56.001c-5.693-1.266-10.791-4.121-14.814-8.086c-6.549,3.213-9.785,7.955-9.785,14.494v22.193 c3.148,1.465,11.26,4.762,22.541,5.967l-2.637-2.109c-0.832-0.664-1.225-1.74-1.008-2.783L38.391,56.001z"
                      fill="#647F94"></path>
                    <path
                      d="M45.01,51.079c13.783,0,25-11.295,25-25.174s-11.217-25.172-25-25.172 c-13.775,0-24.982,11.293-24.982,25.172S31.234,51.079,45.01,51.079z"
                      fill="#647F94"></path>
                    <polygon fill="#6EC4A7"
                      points="43.977,56.978 38.59,85.118 45.242,90.437 51.881,85.122 46.414,56.978 "></polygon>
                    <path
                      d="M66.475,47.896c-3.943,3.895-8.932,6.709-14.492,8.016l5.803,29.758c0.219,1.047-0.172,2.123-1.002,2.791 l-2.496,1.996c6.957-0.83,14.496-2.648,22.398-5.959V62.409C76.686,55.862,73.309,51.114,66.475,47.896z"
                      fill="#647F94"></path>
                  </g>
                </g>
              </g>
            </svg>
            <svg class="h-8 w-8 md:hidden" fill="#2343e1" width="64px" height="64px" viewBox="0 0 256 256" id="Flat"
              xmlns="http://www.w3.org/2000/svg" stroke="#2343e1">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  d="M128,76a44,44,0,1,1-44,44A44,44,0,0,1,128,76Zm103.17676-2a7.99671,7.99671,0,0,1-10.92822,2.92822l-4.66822-2.69531A24.0036,24.0036,0,0,1,208,78.624V84a8,8,0,0,1-16,0V78.624a24.0036,24.0036,0,0,1-7.58032-4.39111l-4.66822,2.69531a8,8,0,0,1-8-13.85644l4.65687-2.68872a23.72829,23.72829,0,0,1,0-8.76612l-4.65687-2.68872a8,8,0,0,1,8-13.85644l4.66822,2.69531A24.0036,24.0036,0,0,1,192,33.376V28a8,8,0,0,1,16,0v5.376a24.0036,24.0036,0,0,1,7.58032,4.39111l4.66822-2.69531a8,8,0,1,1,8,13.85644l-4.65687,2.68872a23.72829,23.72829,0,0,1,0,8.76612l4.65687,2.68872A8.00037,8.00037,0,0,1,231.17676,74ZM200,64a8,8,0,1,0-8-8A8.00917,8.00917,0,0,0,200,64Zm22.37012,44.5564a7.99991,7.99991,0,0,0-6.99512,8.89209A89.40475,89.40475,0,0,1,216,128a87.63852,87.63852,0,0,1-22.24194,58.41064,79.70677,79.70677,0,0,0-24.431-22.97485,59.83657,59.83657,0,0,1-82.65418-.00024A79.7048,79.7048,0,0,0,62.2417,186.41016,87.9498,87.9498,0,0,1,128,40c2.72656,0,5.477.126,8.1748.37427a8.00012,8.00012,0,0,0,1.4668-15.93286C134.4585,24.14844,131.21436,24,128,24A103.95123,103.95123,0,0,0,57.81982,204.68091a7.93384,7.93384,0,0,0,1.32544,1.18921,103.78418,103.78418,0,0,0,137.71155-.002,7.935,7.935,0,0,0,1.31983-1.18383A103.74663,103.74663,0,0,0,232,128a105.40092,105.40092,0,0,0-.73828-12.44849A8,8,0,0,0,222.37012,108.5564Z">
                </path>
              </g>
            </svg> <span>فضاء المحترف</span>
          </div>
          <div @click="is_client_form=true"
            class="leading-8 md:leading-[2.2rem] w-1/2 md:w-1/3 p-3  text-gray-600 font-semibold text-sm md:text-base  border-l ltr:border-r cursor-pointer text-center flex flex-col md:flex-row justify-center items-center gap-2"
            :class="is_client_form && 'bg-body'">
            <svg class="h-8 w-8" fill="#000000" width="64px" height="64px" viewBox="0 0 24 24" id="user-circle"
              data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
              <g id="SVGRepo_iconCarrier">
                <circle id="primary" cx="12" cy="12" r="10" style="fill: #e9c261;"></circle>
                <path id="secondary"
                  d="M15.15,14.88a5,5,0,1,0-6.3,0A6,6,0,0,0,6,19.4a1,1,0,0,0,.43.93,10,10,0,0,0,11.06,0A1,1,0,0,0,18,19.4,6,6,0,0,0,15.15,14.88Z"
                  style="fill: #477cb8;"></path>
              </g>
            </svg> <span>فضاء العميل</span>
          </div>
        </div>
        <form x-show="!is_client_form" wire:submit.prevent="ProfessionalRegister" class="border p-3">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-y-0 gap-3">
            <div class="name  mt-4">
              <label for="name" class=" my-2 flex  text-sm md:text-base">
                <span>الاسم</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input wire:model="first_name" type="text" class="white-input-theme" required value="" />
              @error('first_name')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
            <div class="family_name  mt-4">
              <label for="family_name" class=" my-2 flex text-sm md:text-base">
                <span>اسم العائلة</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input wire:model="last_name" type="text" class="white-input-theme" required value="" />
              @error('last_name')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-y-0 gap-3">
            <div class="  mt-4">
              <label for="username" class=" my-2 flex  text-sm md:text-base">
                <span>اسم المستخدم</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input wire:model="username" type="text" class="white-input-theme" required value="" />
              @error('username')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
            <div class="email  mt-4">
              <label for="email" class=" my-2 flex  text-sm md:text-base">
                <span>البريد الالكتروني</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input wire:model="email" type="email" class="white-input-theme" required value="" />
              @error('email')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-y-0 gap-3">
            <div class="password  mt-4">
              <label for="password" class=" my-2 flex text-sm md:text-base">
                <span>كلمة السر</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input wire:model="password" type="password" class="white-input-theme" required value="" />
              @error('password')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
            <div class="password_confirmation  mt-4">
              <label for="password_confirmation" class=" my-2 flex text-sm md:text-base">
                <span>تأكيد كلمة السر</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input wire:model="passwordConfirmation" type="password" class="white-input-theme" required value="" />

            </div>
          </div>
          <div class=" mt-5">
            <div class="g-recaptcha" data-sitekey="6LcQCGgmAAAAAPHKsHGGKQAEYjIon_sc519AIfVW"></div>
          </div>
          <div class="flex items-center gap-2 text-sm md:text-md  mt-5">
            <input wire:model="conditions" type="checkbox" name="conditions" id="conditions"
              class="border-gray-300 rounded h-5 md:h-4 w-5 md:w-4" />
            <label for="conditions">قرأت وأوافق على
              <a href="conditions.html" class="text-primaryTextColorDarken underline underline-offset-4">شروط
                الاستخدام</a>
              و
              <a href="privacy.html" class="text-primaryTextColorDarken underline underline-offset-4">سياسة الخصوصية</a>

            </label>
            @error('conditions')
            <p class="mt-2 text-sm text-red-600 flex-none">{{ $message }}</p>
            @enderror
          </div>
          <div class="mt-8">
            <button type="submit"
              class="block text-center bg-primaryTextColor text-sm md:text-md text-white font-bold py-2 px-4 w-full rounded hover:bg-primaryTextColorDarken">
              <svg wire:loading wire:target="ProfessionalRegister" class="
                  w-5
                  h-5
                  mr-3
                  -ml-1
                  text-white
                  animate-spin
              " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
              </svg>
              <span class="mx-2">إنشاء حساب</span>
            </button>
          </div>
        </form>
        <form x-show="is_client_form" wire:submit.prevent="ClientRegister" class="border p-3">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-y-0 gap-3">
            <div class="name  mt-4">
              <label for="name" class=" my-2 flex  text-sm md:text-base">
                <span>الاسم</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input wire:model="first_name" type="text" class="white-input-theme" required value="" />
              @error('first_name')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
            <div class="family_name  mt-4">
              <label for="family_name" class=" my-2 flex text-sm md:text-base">
                <span>اسم العائلة</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input wire:model="last_name" type="text" class="white-input-theme" required value="" />
              @error('last_name')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-y-0 gap-3">
            <div class="  mt-4">
              <label for="username" class=" my-2 flex  text-sm md:text-base">
                <span>اسم المستخدم</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input wire:model="username" type="text" class="white-input-theme" required value="" />
              @error('username')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
            <div class="  mt-4">
              <label for="phone_number" class=" my-2 flex  text-sm md:text-base">
                <span>رقم الجوال(+الرقم الدولي)</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input wire:model="phone_number" type="phone_number" class="white-input-theme" required placeholder="000XXXXXXXXX+" />
              @error('phone_number')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-y-0 gap-3">
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
            <div class="  mt-4">
              <label for="nationality" class=" my-2 flex  text-sm md:text-base">
                <span>البلد</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <select  wire:model="nationality"  type="text" class="white-input-select" id="countries" name="nationality" value="" >

              </select>
              @error('nationality')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-y-0 gap-3">
            <div class="password  mt-4">
              <label for="password" class=" my-2 flex text-sm md:text-base">
                <span>كلمة السر</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input wire:model="password" type="password" class="white-input-theme" required value="" />
              @error('password')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
            <div class="password_confirmation  mt-4">
              <label for="password_confirmation" class=" my-2 flex text-sm md:text-base">
                <span>تأكيد كلمة السر</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input wire:model="passwordConfirmation" type="password" class="white-input-theme" required value="" />

            </div>
          </div>
          <div class=" mt-5">
            <div class="g-recaptcha" data-sitekey="6LcQCGgmAAAAAPHKsHGGKQAEYjIon_sc519AIfVW"></div>
          </div>
          <div class="flex items-center gap-2 text-sm md:text-md  mt-5">
            <input wire:model="conditions" type="checkbox" name="conditions" id=""
              class="border-gray-300 rounded h-5 md:h-4 w-5 md:w-4" />
            <label for="conditions">قرأت وأوافق على
              <a href="conditions.html" class="text-primaryTextColorDarken underline underline-offset-4">شروط
                الاستخدام</a>
              و
              <a href="privacy.html" class="text-primaryTextColorDarken underline underline-offset-4">سياسة الخصوصية</a>

            </label>
            @error('conditions')
            <p class="mt-2 text-sm text-red-600 flex-none">{{ $message }}</p>
            @enderror
          </div>
          <div class="mt-8">
            <button type="submit"
              class="block text-center bg-primaryTextColor text-sm md:text-md text-white font-bold py-2 px-4 w-full rounded hover:bg-primaryTextColorDarken">
              <svg wire:loading wire:target="ProfessionalRegister" class="
                  w-5
                  h-5
                  mr-3
                  -ml-1
                  text-white
                  animate-spin
              " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
              </svg>
              <span class="mx-2">إنشاء حساب</span>
            </button>
          </div>
        </form>

      </div>
      <div class="mt-4 flex items-center justify-between text-primaryTextColor font-semibold">
        <span class="border-b w-1/6 md:w-1/4"></span>
        <a href="login.html" class="text-sm  uppercase"> <span class="text-gray-700 mx-1">لديك حساب؟ </span>تسجيل
          الدخول</a>
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
<script>
  window.addEventListener("DOMContentLoaded", (event) => {
  
  (async () => {
      const response = await fetch('https://restcountries.eu/rest/v2/all?fields=alpha2Code;name');
      const countries = await response.json();
      const select = document.getElementById('countries');
      for (const country of countries) {
          const option = document.createElement('option');
          option.value = country.alpha2Code;
          option.innerText = country.name;
          select.appendChild(option);
      }
  })();
});
</script>
@endpush
    
