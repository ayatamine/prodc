@extends('layouts.app')
@section('title',$page->title)
@section('styles')
<meta name="description" content="{{$page->meta_description}}" />
<meta name="og:description" content="{{$page->meta_description}}" />
<meta name="og:image" content="{{asset($page->image)}}" />
<meta property="og:url" content="{{route('front_pages',['slug'=>$page->slug])}}">
@endsection
@section('content')
     <!--main content  -->
     <div class=" bg-body mt-16 py-8  px-6 md:px-12" id="ethiks">

        <div class="bg-white py-12 px-8 mt-4 text-smd">
          <h2 class="text-primaryTextColor   text-lg md:text-2xl my-4">{{$page->title}}</h2>
          {!!$page->content!!}
        </div>
        
      </div>
@endsection
