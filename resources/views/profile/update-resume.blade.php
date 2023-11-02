@extends('template')
@section('title','Update Your Resume')
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
        <form action="{{ route('profile.send_update_resume') }}" method="post" enctype="multipart/form-data">
            @csrf
            <p class="text-center p-4 text-black dark:text-white">Update Your Resume</p>
            <!-- File upload code -->
            <div class="text-center">
                <input type="file" name="resume" class="mr-2 file-input file-input-bordered file-input-success w-full max-w-xs" />
                <button type="submit" class="mt-10 btn btn-success">Save</button>
            </div>
        </form>

    </div>
    @if($viewResume->isNotEmpty())
    <form action="{{ route('deleteResume') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
            <div class="flex">
                <div class="relative h-32 w-32 p-10"> <!-- Set the width and height to 10px -->
                    <iframe class="absolute inset-0 w-full h-full object-cover border-none box-shadow-none" src="{{ $viewResume[0]->resume }}" frameborder="0" width="30" <!-- Set the width to 10px -->
                        height="30" <!-- Set the height to 10px -->
                        ></iframe>
                </div>
                <button type="submit" class="btn btn-success ml-10">Delete</button>
            </div>
        </div>
    </form>
    @else
    @endif
    @endsection
    <!-- Content End -->