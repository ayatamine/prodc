@extends('layouts.app')
@section('title',$user->full_name)
@section('content')
<div>
  {{-- <livewire:breadcrumb first_link="home" first_link_title="{{trans('frontend.home')}}" second_link_title="{{$user->full_name}}" /> --}}
  <livewire:user-details-page user={$user}} />
</div>
@endsection