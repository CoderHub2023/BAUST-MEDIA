@extends('template')
@include('layouts.admin-navbar')
@section('title','Admin | Home')
@section('content')
@foreach($ExtactUserdata as $ExtactUserdata)
<div class="mt-4 bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden w-full lg:w-2/3 mx-auto">
  <div class="flex items-center p-4 lg:p-6">
    <!-- Profile Photo -->
    <div class="flex-shrink-0 w-4/6">
      <img src="{{$ExtactUserdata->idcardphoto }}" alt="Profile Picture" class="w-full h-auto ">
    </div>
    <!-- Details -->
    <div class="container ml-10">
      <div class="ml-4 ">
        <h2 class="text-lg font-semibold">{{ $ExtactUserdata->name }} </h2>
        <p class="text-gray-600 dark:text-gray-400 text-sm">University ID: {{ $ExtactUserdata->roll }}</p>
        <p class="text-gray-600 dark:text-gray-400 text-sm">Email: {{ $ExtactUserdata->email }}</p>
        <p class="text-gray-600 dark:text-gray-400 text-sm">Mobile: {{ $ExtactUserdata->mobile }}</p>
      </div>
      <!-- Accept/Reject Buttons -->
      <div class="ml-auto mt-8">
        <button class="bg-green-500 hover:bg-green-600 text-white py-1 px-3 rounded-full mr-2 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"><a href="{{ url('/admin/getuserid/'.$ExtactUserdata->id) }}">Accept</a></button>
        <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded-full focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"><a href="{{ url('/admin/getrejuserid/'.$ExtactUserdata->id) }}">Reject</a></button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection