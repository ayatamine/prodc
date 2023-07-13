<div class=" bg-body mt-16 py-8  px-8 md:px-12">
    @if(!count($posts))
    <x-alert type="info"       message="{{trans('frontend.no_item_added_yet',['title'=>trans('frontend.article')])}}" />
    @endif
    <!-- intro articles -->
   <div class="intro-articles  w-full md:w-11/12 mx-auto md:flex justify-center gap-12">
    <!-- first article -->
    {{-- @if($posts && (count($posts) > 1) && (count($posts) > 2)) --}}
    @foreach ($posts as $key=>$post)
  
    @if($key > 1) @break @endif
    <div class="article w-full md:w-1/2 block ">
      <div class="article-img">
        <img width="720" height="405"
        data-src="{{$post->image}}"
        data-placeholder-background="#81929c"
         alt="{{$post->title}}" class="lozad blog-img">
      </div>
      <div class="article-content p-3  bg-white">
        <div class="flex justify-between items-center leading-7 text-[13px] mt-3">
          <a href="{{route('blog.index',['category'=>$post->postcategory->slug])}}" class="blog-category">{{app()->getLocale() == 'en' ? $post->postcategory->title :
            ((app()->getLocale() =='ar') ? $post->postcategory->title_ar : $post->postcategory->title_fr)}}</a>
          <span class="blog-date">{{$post->created_at}}</span>
        </div>
        <a  href="{{route('blog.show',['slug'=>$post->slug])}}" class="blog-t">{{\Illuminate\Support\Str::limit($post->title,40)}}</a>
        <a  href="{{route('blog.show',['slug'=>$post->slug])}}" class="blog-p">
            {!! \Illuminate\Support\Str::limit($post->content,100) !!}
        </a>
      </div>
    </div>
    @endforeach
    {{-- @endif --}}
   </div>

   <div class="my-12 w-full md:w-11/12 mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

    @if($posts && count($posts) > 2)
    @foreach($posts as $key=>$post)
    @if($key <2) @continue @endif
    <div class="article ">
      <div class="article-img">
        <img width="720" height="405"  
        data-src="{{$post->image}}"
        data-placeholder-background="#81929c"
         alt="{{$post->title}}" class="lozad blog-img">
      </div>
      <div class="article-content p-3  bg-white">
        <div class="flex justify-between items-center leading-7 text-[13px] mt-3">
          <a href="{{route('blog.index',['category'=>$post->postcategory->slug])}}" class="blog-category">{{app()->getLocale() == 'en' ? $post->postcategory->title :
            ((app()->getLocale() =='ar') ? $post->postcategory->title_ar : $post->postcategory->title_fr)}}</a>
          <span class="blog-date">{{$post->created_at}}</span>
        </div>
        <a  href="{{route('blog.show',['slug'=>$post->slug])}}" class="blog-t"> {{\Illuminate\Support\Str::limit($post->title,40)}}</a>
        <a  href="{{route('blog.show',['slug'=>$post->slug])}}" class="blog-p">
            {!! \Illuminate\Support\Str::limit($post->content,100) !!}
        </a>
      </div>
    </div>
    @endforeach
    @endif
   
   <!-- pagination -->
 
                
  </div>