@section('title',trans('frontend.account_verification'))
<div x-data="{is_file1_present:@entangle('identity_card_front'),is_file2_present:@entangle('identity_card_back'),
is_file3_present: @entangle('identity_card_holded')}" role="tabpanel" aria-labelledby="dashboard-tab" class="relative bg-white h-full">
   

    <div class="bg-white p-2 px-6 border-b rounded flex justify-between items-center  ">
      <h2 class="  text-md">{{trans('fontend.account_verification')}}</h2>
      <button @click.prevent="toggle()" class="bg-blue-200 p-1 border border-blue-500">
        <svg class="h-6 w-6 text-blue-500 mx-auto"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
      </button>
    </div>
    <div class="w-full p-6">
      <ul class="bg-primary w-full md:w-2/3 mx-auto p-3 text-white text-sm md:text-base">
        <li class="flex justify-start items-center gap-2 mb-1">
          <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 12l5 5l10 -10" /></svg>
          <span> {{trans('frontend.account_verification_steps.feature1')}}   </span>
        </li>
        <li class="flex justify-start items-center gap-2 mb-1">
          <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 12l5 5l10 -10" /></svg>
          <span> {{trans('frontend.account_verification_steps.feature1')}} </span>
        </li>
        <li class="flex justify-start items-center gap-2 mb-1">
          <svg class="h-5 w-5"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 12l5 5l10 -10" /></svg>
          <span>  {{trans('frontend.account_verification_steps.feature1')}} </span>
        </li>
      </ul>
    </div>
    <!-- forms -->
    <form wire:submit.prevent="apply" class="p-16 grid grid-cols-1 sm:grid-cols-2 gap-6 gap-y-12">
      <div  class="text-center p-4" wire:ignore>
        <img data-src="{{asset('assets/images/id-verify-front-side.svg')}}" alt="" class="lozad w-36 h-36 mx-auto ">
        <p class="text-[13px] my-6 ">
          {{trans('frontend.account_verification_steps.step1')}} 
        </p>
        <label x-show="!is_file1_present" for="identity-card-front" class=" relative py-2 text-white text-sm cursor-pointer rounded bg-primaryTextColor  hover:bg-primaryTextColorDarken px-8 block mx-auto w-fit">
          <span wire:loading.flex wire:target="identity_card_front" class="bg-primaryTextColor  z-40 absolute h-full w-full top-0 left-0 justify-center flex items-center">
            {{trans('frontend.loading')}}
          </span>
          {{trans('frontend.account_verification_steps.attach_file')}}
        </label>
        <label x-show="is_file1_present" for="identity-card-front" class="relative flex justify-center gap-2 items-center  py-2 text-white text-sm cursor-pointer rounded bg-success-500  hover:bg-success-600 px-8  mx-auto w-fit">
          <span wire:loading.flex wire:target="identity_card_front"  class="bg-primaryTextColor  z-40 absolute h-full w-full top-0 left-0 justify-center flex items-center">
            {{trans('frontend.loading')}}
          </span>
          <svg class="h-5 w-5 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>          
          <span>{{trans('frontend.account_verification_steps.attach_file')}}</span>
        </label>
        <input type="file" wire:model.lazy="identity_card_front" accept="image/*" class="hidden" name="identity_card_front" id="identity-card-front">
        @error('photos.*') <span class="error">{{ $message }}</span> @enderror
      </div>
      <div  class="text-center p-4" wire:ignore>
        <img data-src="{{asset('assets/images/id-verify-back-side.svg')}}" alt="" class="lozad w-36 h-36 mx-auto ">
        <p class="text-[13px] my-6 ">
          {{trans('frontend.account_verification_steps.step2')}} 
        </p>
        <label x-show="!is_file2_present" for="identity-card-back" class=" relative py-2 text-white text-sm cursor-pointer rounded bg-primaryTextColor  hover:bg-primaryTextColorDarken px-8 block mx-auto w-fit">
          <span wire:loading.flex  wire:target="identity_card_back"  class="bg-primaryTextColor  z-40 absolute h-full w-full top-0 left-0 justify-center flex items-center">
            {{trans('frontend.loading')}}
          </span>
          {{trans('frontend.account_verification_steps.attach_file')}}
        </label>
        <label x-show="is_file2_present" for="identity-card-back" class="relative flex justify-center gap-2 items-center  py-2 text-white text-sm cursor-pointer rounded bg-success-500  hover:bg-success-600 px-8  mx-auto w-fit">
          <span wire:loading.flex  wire:target="identity_card_back" class="bg-primaryTextColor  z-40 absolute h-full w-full top-0 left-0 justify-center flex items-center">
            {{trans('frontend.loading')}}
          </span>
          <svg class="h-5 w-5 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>          
          <span>{{trans('frontend.account_verification_steps.attach_file')}}</span>
        </label>
        <input type="file" class="hidden"  wire:model.lazy="identity_card_back" accept="image/*" name="identity_card_back" id="identity-card-back">
        @error('photos.*') <span class="error">{{ $message }}</span> @enderror
      </div>
      <div  class="text-center p-4" wire:ignore>
        <img data-src="{{asset('assets/images/id-verify-selfie.svg')}}" alt="" class="lozad w-36 h-36 mx-auto ">
        <p class="text-[13px] my-6 ">
          {{trans('frontend.account_verification_steps.step3')}} 
         
        </p>
        <label x-show="!is_file3_present" for="identity-card-holded" class="relative  py-2 text-white text-sm cursor-pointer rounded bg-primaryTextColor  hover:bg-primaryTextColorDarken px-8 block mx-auto w-fit">
          <span wire:loading.flex  wire:target="identity_card_holded"  class="bg-primaryTextColor  z-40 absolute h-full w-full top-0 left-0 justify-center flex items-center">
            {{trans('frontend.loading')}}
          </span>
          {{trans('frontend.account_verification_steps.attach_file')}}
        </label>
        <label x-show="is_file3_present " for="identity-card-holded" class="relative flex justify-center gap-2 items-center  py-2 text-white text-sm cursor-pointer rounded bg-success-500  hover:bg-success-600 px-8  mx-auto w-fit">
          <span wire:loading.flex  wire:target="identity_card_holded"  class="bg-primaryTextColor  z-40 absolute h-full w-full top-0 left-0 justify-center flex items-center">
            {{trans('frontend.loading')}}
          </span>
          <svg class="h-5 w-5 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>          
          <span>{{trans('frontend.account_verification_steps.attach_file')}}</span>
        </label>
        <input type="file" class="hidden"  wire:model.lazy="identity_card_holded" accept="image/*" name="identity-card-holded" id="identity-card-holded">
        @error('photos.*') <span class="error">{{ $message }}</span> @enderror
      </div>
      <div  class="text-center p-4" wire:ignore>
        <img data-src="{{asset('assets/images/id-verify-welcome.png')}}" alt="" class="lozad w-36 h-36 mx-auto ">
        <p class="text-[13px] my-6 ">
          {{trans('frontend.account_verification_steps.step4')}} 
         
        </p>
        <x-submit-button target="apply" :title="trans('frontend.account_verification_steps.apply_order')" extraClasses="!mx-auto !w-fit bg-success-500 hover:!bg-success-700"  />
      </div>
    </form>
    <div class="w-full p-6 pt-0" >
      <ul class="bg-primary w-full md:w-2/3 mx-auto p-3 text-white text-sm leading-8">
        <li class="flex justify-start items-center gap-2 mb-1">
          <span> {{trans('frontend.account_verification_steps.step5')}}  </span>
        </li>
        <li class="flex justify-start items-center gap-2 mb-1">
          <span>  {{trans('frontend.account_verification_steps.step6')}}     </span>
        </li>
        <li class="flex justify-start items-center gap-2 mb-1">
          <span>  {{trans('frontend.account_verification_steps.step7')}} </span>
        </li>
        @professional
        <li class="flex justify-start items-center gap-2 mb-1">
          <span>  {{trans('frontend.account_verification_steps.step8')}}<a href="{{route('my_portfolios')}}" class="underline underline-offset-2"> {{trans('frontend.account_verification_steps.step9')}} </a>   {{trans('frontend.account_verification_steps.step10')}}   </span>
        </li>
        @endprofessional
      </ul>
    </div>
  </div>
</div>
