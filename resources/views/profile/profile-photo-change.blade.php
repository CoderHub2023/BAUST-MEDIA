@extends('template')
@section('title','Update Profile Photo')
@include('layouts.public-nav')

<!-- Contest Start -->
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
    <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
        
        @if(session('success'))
        <p class=" text-green-500">{{ session('success') }}</p>
        @endif

        @if(session('failure'))
        <p class="text-red-600">{{ session('failure') }}</p>
        @endif

        <!-- cover image and profile photo -->
        <form action="{{ route('profile.image-upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Profile image section -->
            <p class="text-lg dark:text-while  m-4">Profile Image</p>
            <div class="flex">
                <div class="shrink-0">
                    <img class="h-16 w-16 object-cover mr-10" src="{{ $UserData->profile_picture }}" alt="Current profile photo" />
                </div>
                <label class="block">
                    <span class="sr-only">Choose profile photo</span>
                    <input type="file" name="profile_picture" class="block w-full text-sm text-slate-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-violet-50 file:text-violet-700
                    hover:file:bg-violet-100
                    " />
                </label>
            </div>

            <button type="submit" class="mt-10 btn btn-success">Save</button>
        </form>








    </div>
    @endsection
    <!-- Content End -->