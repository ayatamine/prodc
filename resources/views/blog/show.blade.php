@extends('layouts.blog')
@section('title',$post->title)
@section('content')
<div>
  <livewire:blog-detail :post="$post" >
</div>
@endsection