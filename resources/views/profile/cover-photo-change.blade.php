@extends('template')
@section('title','Update Profile Photo')
@include('layouts.public-nav')

<!-- Contest Start -->
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
    <div class="flex flex-col items-center justify-center shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">

        @if(session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
        @endif

        @if(session('failure'))
        <p class="text-red-600">{{ session('failure') }}</p>
        @endif

        <!-- cover image -->
        <form action="{{ route('profile.image-upload') }}" method="post" enctype="multipart/form-data" class="text-center">
            @csrf
            <p class="text-lg text-black dark:text-white m-4">Cover Image</p>
            <div class="mb-4">
                <div class="shrink-0">
                    <img class="h-32 w-48 object-cover mx-auto mb-2" src="{{ $UserData->cover_picture }}" id="viewCoverPhoto" alt="Current profile photo" />
                    <div id="preview" class="h-32 w-48">

                    </div>
                </div>
                <label class="block">
                    <span class="sr-only">Choose cover photo</span>
                    <input type="file" onchange="coverPhotoValidation()" id="coverPhoto" 
                    name="cover_picture" class="block w-full text-sm text-slate-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-violet-50 file:text-violet-700
                    hover:file:bg-violet-100" />
                    <small id="coverPhotoValidationText" class="text-red-600"></small>
                </label>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>

    </div>
</div>
@endsection
<!-- Content End -->
