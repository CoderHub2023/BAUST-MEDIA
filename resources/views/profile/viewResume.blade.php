@extends('template')
@section('title','Profile')
@include('layouts.public-nav')
@section('content')
<div class="overflow-hidden relative" style="padding-top: 56.25%;"> <!-- 16:9 aspect ratio -->
    <iframe class="absolute inset-0 w-full h-full" src="{{ asset('Resume-Abu-Shadat-Shaikat.pdf') }}" frameborder="0"></iframe>
</div>
@endsection
