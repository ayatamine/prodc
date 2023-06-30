<div>
    <form wire:submit.prevent='updateProfilephotoPath' class="w-fit mx-auto relative">
      <a href="" class="block h-28 w-28 rounded-full shadow-lg border  mx-auto " class="relative">
        <span wire:loading.flex wire:target='profile_photo_path' class="flex justify-center items-center w-full h-full rounded-full absolute top-0 left-0 bg-primaryTextColor text-white">
            {{trans('frontend.loading')}}
        </span>
        <img data-src="{{auth()->user()->profile_photo_path}}" data-placeholder-background="#6b7280ff"
        class="lozad h-full w-full  rounded-full " alt="">
      </a>
      <label for="profile_photo_path" class="cursor-pointer">
        <span class="absolute bottom-[1rem] left-[-1rem] h-10 w-10 rounded-full border border-dotted bg-white flex items-center justify-center hover:bg-primaryTextColor">
         <svg class="h-5 w-5 text-gray-700 hover:text-white"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />  <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />  <line x1="16" y1="5" x2="19" y2="8" /></svg>
        </span>
      </label>
      <input type="file" wire:model.lazy='profile_photo_path' name="profile_photo_path" id="profile_photo_path" class="hidden">
    </form>
    <h3 class="text-lg md:text-xl my-3 text-center text-gray-800">{{fullName()}} </h3>
    
  </div>