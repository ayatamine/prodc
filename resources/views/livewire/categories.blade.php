<div>
     <!-- top search bar -->
     <div class="w-full bg-primaryTextColor rounded p-14">
        <form wire:submit.prevent='search'>
          <h1 class="text-center font-bold text-white text-3xl">{{trans('frontend.search_prodc')}}</label></h1>
            <p class="mx-auto font-normal text-smd text-center my-6 max-w-lg text-white">{{trans('frontned.contact_prodc')}}</p>
            <div class="flex items-center bg-white rounded-sm overflow-hidden px-2 py-0 md:py-0.5 justify-between max-w-4xl mx-auto">
              <input wire:model.lazy="search" class="text-sm text-gray-500  flex-grow outline-none px-2 " type="text" placeholder="{{trans('frontend.contact_prodc_placeholder')}}" />
              <div class="flex items-center px-2  rounded  mx-auto gap-x-2 ">
                <select id="cities" wire:model.lazy="country" class="hidden md:inline-block white-input-select text-sm" style="    padding-top: 0;">
                  <option disabled value="" selected>{{trans('frontend.company.country')}}</option>
                  @if($countries)
                  @foreach ($countries as $key=>$country)
                      <option value="{{$key}}">{{$country}}</option>
                  @endforeach
                  @endif
                </select>
                <button type="submit" class="primary-btn sm-button rounded-sm px-6 py-2 border ">{{trans('frontend.search')}}</button>
              </div>
             
            </div>
            <div class="flex justify-center items-center gap-3 my-4 md:hidden ">
              <label for="cities" class="text-sm w-1/2 text-white ">اختر المدينة</label>
              <select id="cities" class=" text-sm w-1/2  white-input-select">
                <option value="Lone" selected>Lone</option>
                <option value="qqdsq">ndfd fet</option>
                <option value="org">osdf sdrg</option>
                <option value="io">ds fsdqgio</option>
              </select>
            </div>
        </form>
      </div>
      <!-- top search bar -->
      <div
      class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-8 pb-16 auto-rows-min grid-auto-rows-min">
      @php

      $random_bg=
      ['bg-green-400','bg-blue-400','bg-red-400','bg-yellow-600','bg-orange-400',
      'bg-amber-400','bg-emerald-300','bg-emerald-600','bg-teal-400','bg-cyan-400','bg-indigo-400']
      @endphp
      @if($specialities && count($specialities))
      @foreach ($specialities as $sp)

      <div class="bg-white rounded shadow-lg overflow-hidden h-fit ">
          <div
              class="{{$random_bg[array_rand($random_bg)]}} text-white flex flex-col items-center justify-center py-2">
              <img src="{{$sp['image']}}" class="h-12 w-12 mb-2 " alt="">
              <span
                  class="text-lg font-bold ml-2 mb-2 text-white">{{app()->getLocale()
                  != 'en' ? $sp['title_'.app()->getLocale()] : $sp['title']}}</span>
          </div>
          <div class="">
              <ul class="list-none">
                  @if($sp['jobs'] && count($sp['jobs']))
                  @foreach ($sp['jobs'] as $job)
                    @php 
                        $title =( app()->getLocale() != 'en') ?
                          $job['title_'.app()->getLocale()] : $job['title'];
                    @endphp
                  <li
                      class="border-b py-2 px-4 hover:bg-body hover:text-primaryTextColor">
                      <a href="{{route('professionals.index',['job'=>$title,'c'=>$job['id']])}}"
                          @click="showCatModel = !showCatModel" href="">
                          {{$title}}
                      </a>
                  </li>
                  @endforeach
                  @endif

              </ul>
          </div>
      </div>
      @endforeach
      @endif
  </div>
</div>