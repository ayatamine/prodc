@extends('layouts.app')
@section('title',trans('frontend.services'))
@section('content')
<div>
  <livewire:breadcrumb first_link="home" first_link_title="{{trans('frontend.home')}}" second_link_title="{{trans('frontend.published_services')}}" />
  <livewire:services />
</div>
@endsection