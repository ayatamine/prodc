@extends('layouts.app')
@section('title',trans('frontend.prodc_professionals'))
@section('content')
<div>
  <livewire:breadcrumb first_link="home" first_link_title="{{trans('frontend.home')}}" second_link_title="{{trans('frontend.prodc_professionals')}}" />
  <livewire:professionals />
</div>
@endsection