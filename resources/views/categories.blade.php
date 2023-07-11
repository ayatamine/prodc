@extends('layouts.app')
@section('title',trans('frontend.job_categories'))
@section('content')
<div>
  <livewire:categories :specialities="$specialities">
</div>
@endsection