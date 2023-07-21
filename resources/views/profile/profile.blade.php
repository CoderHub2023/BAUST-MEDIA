@extends('template')
@section('title','Profile')
@include('layouts.public-nav')


@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
    <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
        <!-- cover image and profile photo -->
        <div class="bg-gray-100">
            <!-- Cover image -->
            <div class="relative">
                <!-- <img class="w-full h-80 object-cover" src="{{ asset('media/profile/shaikat-cover.jpeg') }}" alt="Cover image"> -->
                <div class="relative">
                    <img class="w-full h-80 object-cover" src="{{ $user[0]->cover_picture }}" alt="Cover image">
                    <button onclick="document.getElementById('CoverInput').click()" class="absolute top-0 right-0 m-4 bg-gray-800 p-2 rounded-full hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4m-7-7l-3 3v4h4l3-3-4-4z" />
                        </svg>
                    </button>
                    <input type="file" id="CoverInput" style="display:none" accept="image/*">
                </div>

                <!-- Profile photo -->
                <div class="absolute left-8 top-56">
                    <a href="#" class="mb-4 inline-block rounded-full overflow-hidden border-4 border-white shadow-lg" onclick="changeProfilePhoto()">
                        <img onclick="document.getElementById('ProfileInput').click()" class="w-32 h-32 object-cover" src="{{ $user[0]->profile_picture }}" alt="Profile photo">
                        <input type="file" id="ProfileInput" style="display:none" accept="image/*">
                    </a>
                </div>
            </div>
        </div>

        <!-- name and occupation -->
        <div class="bg-gray-100 dark:bg-gray-900 lg:flex">
            <!-- Left column -->
            <div class="w-2/2 lg:w-1/2 p-8 mt-2">
                <h1 class="text-2xl lg:text-2xl font-extrabold  dark:text-white text-gray-400 tracking-tight mb-2 mt-2">{{$user[0]->name}}</h1>
                <h2 class="text-xs lg:text-xl font-bold dark:text-white text-gray-400 tracking-tight mb-4">{{$user[0]->headlines}}</h2>
                <p class="text-xs dark:text-white text-gray-500 mb-4">{{$user[0]->address}}</p>
            </div>
            <!-- Right column -->
            <div class="w-2/2 lg:w-1/2 p-8">
                <h2 class="text-lg font-bold dark:text-white text-gray-500 tracking-tight mb-4">Work at:</h2>
                <p class="text-lg dark:text-white text-gray-400 mb-4">CSE Society,BAUST</p>
                <h2 class="text-lg font-bold dark:text-white text-gray-500 tracking-tight mb-4">Studying at:</h2>
                <p class="text-lg dark:text-white text-gray-400 mb-4">Bangladesh Army University of Science and Technology (BAUST), Saidpur</p>
            </div>
        </div>
        <button class="btn btn-info"><a href="{{ route('profile.update-details') }}">Edit Details</a></button>
        <button class="btn btn-danger w-32"><i class="fa fa-download" aria-hidden="true"></i><p class="text-sm">Resume</p></button>
    </div>

</div>
<!-- About section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
    <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
        <h2 class="text-3xl font-bold mb-4 dark:text-white">About Me</h2>
        <p class="dark:text-gray-400 text-lg leading-relaxed mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis interdum porttitor felis vel bibendum. In hac habitasse platea dictumst. Maecenas ac tortor in mauris mattis faucibus. Nam eget arcu nulla. Sed malesuada nulla vel ipsum ultrices, non dictum sapien euismod. Aliquam vel neque nec massa eleifend interdum.</p>
        <p class="dark:text-gray-400 text-lg leading-relaxed mb-6">Nulla fermentum enim sit amet malesuada efficitur. Nullam blandit ultricies leo, vitae tincidunt tortor aliquet eget. Sed vestibulum dolor euismod neque egestas, eu accumsan sapien fermentum. Suspendisse eget felis vel ex mollis mattis. Nam eget leo nec justo malesuada lobortis. Aenean pulvinar faucibus luctus.</p>
    </div>
</div>
</div>
@endsection