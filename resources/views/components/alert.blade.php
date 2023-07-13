@if($type == 'info')

<!-- Info -->
<div class="px-6 py-2 my-2 bg-blue-400 text-white flex justify-between rounded">
    <div class="flex items-center">
       <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-3 ltr:ml-0 rtl:mr-0" viewBox="0 0 20 20" fill="currentColor">
         <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
       </svg>
        <p class="text-md md:text-base">{{$message}}</p>
    </div>
    {{-- <button class="text-blue-100 hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button> --}}
</div>
@elseif($type=='warning')

<!-- Warning -->
<div class="px-6 py-2 my-2 bg-yellow-400 text-white flex justify-between rounded">
    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-3 ltr:ml-0 rtl:mr-0" viewBox="0 0 20 20" fill="currentColor">
          <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
        </svg>
        <p class="text-md md:text-base">{{$message}}</p>
    </div>
    {{-- <button class="text-yellow-100 hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button> --}}
</div>
@elseif($type=='danger')

<!-- Warning -->
<div class="px-6 py-2 my-2 bg-red-400 text-white flex justify-between rounded">
    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-3 ltr:ml-0 rtl:mr-0" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
        </svg>
        <p class="text-md md:text-base">{{$message}}</p>
    </div>
    {{-- <button class="text-yellow-100 hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button> --}}
</div>
@elseif($type=='success')

<!-- success -->
<div class="px-6 py-2 my-2 bg-green-500 text-white flex justify-between rounded">
    <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-3 ltr:ml-0 rtl:mr-0" viewBox="0 0 20 20" fill="currentColor">
            <path
                d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"
            />
        </svg>
        <p class="text-md md:text-base">{{$message}}</p>
    </div>
    {{-- <button class="text-yellow-100 hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button> --}}
</div>
@endif