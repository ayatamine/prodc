@extends('layouts.app')
@section('title',trans('frontend.services').'-'.$service->title)
@section('content')
    <livewire:breadcrumb first_link="services.index" first_link_title="{{trans('frontend.services')}}" second_link_title="{{\Illuminate\Support\Str::limit($service->title,80)}}" />
    <livewire:service-details :service="$service" />
@endsection