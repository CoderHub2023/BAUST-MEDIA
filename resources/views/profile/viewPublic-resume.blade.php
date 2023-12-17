@extends('template')
@section('title','Resume')
@include('layouts.public-nav')
@section('content')
@if($public_resume->isNotEmpty())
<div class="overflow-hidden relative" style="padding-top: 56.25%;">
    <iframe class="absolute inset-0 w-full h-full" src="{{ $public_resume[0]->resume }}" frameborder="0"></iframe>
</div>
@else
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
    <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">

      <p>Resume Not Uploaded</p>

    </div>
@endif
@endsection