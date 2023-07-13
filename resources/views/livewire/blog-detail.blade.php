<div class=" bg-body mt-16 py-8  px-8 md:px-12">
    <!-- intro articles -->
   <div class=" w-full md:w-11/12 mx-auto md:flex justify-center gap-6">
    <!-- blog content -->
    <div class=" w-full md:w-2/3 ">
       <div class=" bg-white p-4 shadow-md rounded-md  text-gray-700">
          <div class=" lozad h-80 w-full bg-cover bg-center rounded-md"
          data-background-image="{{$post->image}}"
          data-placeholder-background="#81929c"
          alt="{{$post->title}}" 
           style="background-image:url('assets/images/blog/blog-02.jpg')"
           ></div>
          <div class=" p-4 ">
            <h2 class="blog-title">{{$post->title}}</h2>
            <div class="blog-content leading-8 font-Noto-Naskh changed-font-p">
              {!! $post->content !!}
            </div>
            
          </div>
          <hr class="my-4 mt-8">
          <!-- banner -->
          <div class="mt-10 changed-font-p">
             <h2 class="text-base md:text-xl font-bold my-3  text-gray-700">{{trans('frontend.commentbox_title')}}  </h2>
             <p class="leading-7 text-[14px]">
                {{trans('frontend.comment_box_sub_title')}}
             </p>
             <p class="leading-7 text-[14px] mt-2">
                {{trans('frontend.comment_box_sub_title2')}}
             </p>
             <div class=" my-8 mx-6 border-4 rounded border-primaryTextColor  text-center min-h-[170px]">
                <img src="{{asset('assets/images/logo/WhatsApp Image 2023-05-03 at 5.54.05 PM.jpeg')}}" class="h-12 mx-auto my-3" alt="المحترف القوي الامين">
                <h4 class="text-base font-semibold my-3 mb-6">{{trans('frontend.wazzif')}}     </h4>
               <div>
                <a href="{{route('home')}}" class="md-button primary-btn">{{trans('frontend.demande_your_service_now')}}</a>
               </div>
             </div>
          </div>
       </div>
       <div class="bg-white rounded mt-6">
        @if(count($post->comments))
        @foreach ($post->comments as $comment)
        <div class="mt-2 px-6 py-8 border-b">
            <h2 class="text-md md:text-base flex justify-between items-center">
                <span>{{$comment->commenter_name}}</span>
                <span class="text-sm">{{$comment->created_at}}</span>
            </h2>
            <p class="text-base font-semibold mt-3">{{$comment->content}}</p>
        </div>
        @endforeach
        @endif
       </div>
       <!-- add comment form-->
       <div class="bg-white rounded mt-6">
        <h2 class="border-b p-2 px-6 text-md md:text-base">{{trans('frontend.add_your_comment')}}</h2>
        <form wire:submit.prevent="save" class="mt-4 mb-6 p-2 px-6 ">
          <div class="description mt-8 mb-3">
            <textarea wire:model.lazy="content" class="changed-font-div white-input-theme font-Noto-Naskh bg-[#f6f9f9] w-full !border-gray-300" placeholder="ادخل التعليق" name="description" id="description" rows="7"></textarea>
            @error('conent') <span class="error text-red-500">{{ $message }}</span> @enderror
          </div>
          <div class=" flex justify-between gap-4">
            <div class="mb-5  w-full md:w-1/2">
              <label for="description" class=" my-2 flex">
                <span>{{trans('frontend.name')}}</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input type="text" wire:model.lazy="commenter_name" class="changed-font-div white-input-theme font-Noto-Naskh bg-[#f6f9f9] !border-gray-300" name="name" id="name" rows="10"></input>
              @error('commenter_name') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-5 w-full md:w-1/2">
              <label for="description" class=" my-2 flex">
                <span>{{trans('frontend.email_not_published')}}</span>
                <span class="text-red-600 text-xl font-bold mr-2">*</span>
              </label>
              <input type="email" wire:model="commenter_email" class="changed-font-div white-input-theme font-Noto-Naskh bg-[#f6f9f9] !border-gray-300" name="name" id="name" rows="10"></input>
              @error('commenter_email') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>
          </div>
          
            <!-- submit form -->
          <div class="mb-8 inline-block text-center">
            <x-submit-button target="save" :title="trans('frontend.add_comment')" />
          </div>
        </form>
      </div>
    </div>
    <!-- blog content -->
    <div class=" w-full md:w-1/3 mt-6 md:mt-0">
      {{-- <div class=" bg-white p-10 shadow-md rounded-md ">
        <div class=" h-28 w-28 mx-auto  bg-cover bg-center rounded-md" style="background-image:url('assets/images/team/profil_picture_3.png')"></div>
        <h3 class="text-[14px] md:text-base text-center font-semibold my-3 text-gray-700 ">محمد سعيد محمد</h3>
        <div class="flex justify-center gap-2 my-3">
          <div class="flex items-center gap-1 text-[13px] ">
            <svg class="h-4 w-4 text-gray-500" fill="#6b6666" width="64px" height="64px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" stroke="#6b6666"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><circle cx="44.6" cy="36.2" r="16.1"></circle><path d="M48.8,79.6c2.8,0,1.2-1.9,1.2-1.9h0a19.22,19.22,0,0,1-4.2-12,18.65,18.65,0,0,1,1.7-7.9l.2-.4a1.17,1.17,0,0,0-.9-1.9h0a17.7,17.7,0,0,0-2.3-.1A24.35,24.35,0,0,0,20.4,76.3c0,1.2.4,3.5,4.2,3.5H48.3C48.7,79.6,48.7,79.6,48.8,79.6Z"></path><path d="M65.3,51.2A14.25,14.25,0,1,0,79.5,65.5,14.25,14.25,0,0,0,65.3,51.2Zm0,4.5a3.22,3.22,0,0,1,3.2,3.2,3.06,3.06,0,0,1-.7,2l2.3,4.3c.1.2,0,.4-.2.4a2.7,2.7,0,0,0-1.1.5c-.2.1-.4,0-.4-.1l-2.2-4.1a3.08,3.08,0,0,1-.9.1,3.22,3.22,0,0,1-3.2-3.2A3.08,3.08,0,0,1,65.3,55.7Zm-2,8.2L61.1,68a3.26,3.26,0,0,1,1,2.3,3.2,3.2,0,1,1-3.2-3.2h.4l2.3-4.3c.1-.2.2-.2.5-.1a2.87,2.87,0,0,0,1.1.6C63.3,63.7,63.4,63.9,63.3,63.9Zm8.3,9.8a3.29,3.29,0,0,1-3-1.9H64.2c-.2,0-.4-.2-.2-.4a2.48,2.48,0,0,0,.1-.9v-.2c0-.2.1-.4.2-.4h4.2a3.12,3.12,0,0,1,3.1-2.6,3.22,3.22,0,0,1,3.2,3.2A3.44,3.44,0,0,1,71.6,73.7Z"></path></g></svg>
            <span>برمجة المواقع والتطبيقات<span>
          </div>
          <div class="flex items-center gap-1 text-[13px] ">
            <svg class="h-3 w-3 text-gray-600" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#6b6666"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3856 23.789L11.3831 23.7871L11.3769 23.7822L11.355 23.765C11.3362 23.7501 11.3091 23.7287 11.2742 23.7008C11.2046 23.6451 11.1039 23.5637 10.9767 23.4587C10.7224 23.2488 10.3615 22.944 9.92939 22.5599C9.06662 21.793 7.91329 20.7041 6.75671 19.419C5.60303 18.1371 4.42693 16.639 3.53467 15.0528C2.64762 13.4758 2 11.7393 2 10C2 7.34784 3.05357 4.8043 4.92893 2.92893C6.8043 1.05357 9.34784 0 12 0C14.6522 0 17.1957 1.05357 19.0711 2.92893C20.9464 4.8043 22 7.34784 22 10C22 11.7393 21.3524 13.4758 20.4653 15.0528C19.5731 16.639 18.397 18.1371 17.2433 19.419C16.0867 20.7041 14.9334 21.793 14.0706 22.5599C13.6385 22.944 13.2776 23.2488 13.0233 23.4587C12.8961 23.5637 12.7954 23.6451 12.7258 23.7008C12.6909 23.7287 12.6638 23.7501 12.645 23.765L12.6231 23.7822L12.6169 23.7871L12.615 23.7885C12.615 23.7885 12.6139 23.7894 12 23L12.6139 23.7894C12.2528 24.0702 11.7467 24.0699 11.3856 23.789ZM12 23L11.3856 23.789C11.3856 23.789 11.3861 23.7894 12 23ZM15 10C15 11.6569 13.6569 13 12 13C10.3431 13 9 11.6569 9 10C9 8.34315 10.3431 7 12 7C13.6569 7 15 8.34315 15 10Z" fill="currentColor"></path> </g></svg>
            <span>فرنسا <span>
          </div>
        </div>
        <!-- rating box -->
        <div class="flex items-center justify-center my-3">
          <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
        </div>
        <!-- primary buton -->
         <a href="hire_prodc.html" class=" md-button primary-btn flex justify-center items-center gap-2 ">
          
          <span>وظفني عبر المنصة</span>
          <!-- plain svg -->
          <svg class="h-4 w-4 "  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="10" y1="14" x2="21" y2="3" />  <path d="M21 3L14.5 21a.55 .55 0 0 1 -1 0L10 14L3 10.5a.55 .55 0 0 1 0 -1L21 3" /></svg>
         </a>
      </div> --}}
      <!-- other articles -->
      <div class="related-articles bg-white px-6 p-10 shadow-md rounded-md mt-3">
        <h3 class="text-sm">{{trans('frontend.see_also')}}  </h3>
        <!-- related articles item -->
        @if($related_posts && count($related_posts))
        @foreach ($related_posts as $post)
            
        <div class="flex items-start md:items-start gap-x-3 mb-3 ">
          <div class="w-14 h-14 mt-[0.6rem] rouned-full">
            <img data-src="{{$post->image}}"
            data-placeholder-background="#81929c" alt="{{$post->title}}" class="lozad w-full h-full rounded shadow-md">
          </div>
          <div class="flex-1">
            <a href=""{{route('blog.show',['slug'=>$post->slug])}}" class="related-articles-title">{{\Illuminate\Support\Str::limit($post->title,40)}}</a>
            <div class="article-meta">
              <span>{{app()->getLocale() == 'en' ? $post->postcategory->title :
                ((app()->getLocale() =='ar') ? $post->postcategory->title_ar : $post->postcategory->title_fr)}}
              </span> , 
              <span class="articles-date">{{$post->created_at}}</span>
            </div>
        </div>
        @endforeach
        @else 
        <x-alert type="info"       message="{{trans('frontend.no_related_post_found')}}" />
        @endif
        </div>

       </div>
      </div>
    </div>
   <!-- intro articles end -->
  
                
   </div>
  </div>
