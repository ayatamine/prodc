@section('title','بيانات الموقع')

<div class="w-full mt-4">
    <div class="bg-white rounded ">
      <h2 class="border-b px-6 text-md flex justify-between items-center ">
        <span class=" p-2 ">حسابي</span>
        <div class="flex justify-between gap-4">
          <a href="{{route('personal_data')}}" class="  p-2 @if(Request::segment(2) =='personal-data') border-b-2 border-black  @endif ">البيانات الشخصية</a>
          <a href="{{route('profile_website_data')}}" class="  p-2 @if(Request::segment(2) =='website-setting') border-b-2 border-black  @endif  "> بيانات الموقع</a>
        </div>
      </h2>
      <!-- form -->
      <form class="bg-white p-6" wire:submit.prevent="save">
        {{$this->form}}
        <x-submit-button target="save" :title="trans('forms.save_changes')"  />
      </form>
    </div>
  </div>