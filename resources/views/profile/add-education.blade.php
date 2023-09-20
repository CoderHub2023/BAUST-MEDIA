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
                    <img class="w-full h-80 object-cover" src="{{ $loggedInUserData[0]->cover_picture }}" alt="Cover image">
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
                        <img onclick="document.getElementById('ProfileInput').click()" class="w-32 h-32 object-cover" src="{{ $loggedInUserData[0]->profile_picture }}" alt="Profile photo">
                        <input type="file" id="ProfileInput" style="display:none" accept="image/*">
                    </a>
                </div>
            </div>
        </div>

        <!-- name and occupation -->
        <div class="bg-gray-100 dark:bg-gray-900 lg:flex">
            <!-- Left column -->
            <div class="w-2/2 lg:w-1/2 p-8 mt-2">
                <h1 class="text-2xl lg:text-2xl font-extrabold  dark:text-white text-gray-400 tracking-tight mb-2 mt-2">{{$loggedInUserData[0]->name}}</h1>
                <h2 class="text-xs lg:text-xl font-bold dark:text-white text-gray-400 tracking-tight mb-4">{{$loggedInUserData[0]->headlines}}</h2>
                <p class="text-xs dark:text-white text-gray-500 mb-4">{{$loggedInUserData[0]->address}}</p>
            </div>
            <!--End Left column -->

            <!-- Right column -->
            <div class="w-2/2 lg:w-1/2 p-8">
            <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-bold dark:text-white text-gray-500 tracking-tight mb-4">Work at:</h2>
                        @if($users_works_count !=0)
                        <p class="text-lg dark:text-white text-gray-400 mb-4">{{ $users_works[0]->position }} at {{ $users_works[0]->work_at }}</p>
                        <p class="text-sm dark:text-white text-gray-400 mb-4">Started at: {{ $users_works[0]->start }}</p>
                        @endif
                    </div>
                    <div>
                        @if($users_works_count !=0)
                        <div class="inline">
                            <div class="p-2">
                                <a href="{{ url('/profile/update-works/'.$loggedInUserData[0]->id) }}" class="text-blue-500 hover:text-blue-600">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </div>
                            <div class="p-2">
                                <a href="{{ url('/profile/add-works/') }}" class="text-blue-500 hover:text-blue-600">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        @else
                        <a href="{{ url('/profile/add-works/') }}" class="text-blue-500 hover:text-blue-600">
                            <i class="fas fa-plus"></i>
                        </a>
                        @endif
                    </div>
                </div>
                <form action="{{ route('profile.submit-add-education') }}" method="post">
                    @csrf
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-bold dark:text-white text-gray-500 tracking-tight mb-4">Studies a:</h2>
                            <p class="text-lg dark:text-white text-gray-400 mb-4"><input type="text" name="institution" placeholder="Institution Name" class="input mb-2 input-bordered input-primary w-full max-w-xs" /></p>
                            <p class="text-gray-800 dark:text-white"><input type="text" name="subject" placeholder="Subject" class="input input-bordered input-sm w-full max-w-xs" /></p>
                            <div class="flex w-60 mt-6">
                                <input type="date" name="start" placeholder="Start" class="mr-2 input input-bordered input-sm w-1/2 max-w-sm" />
                                <input type="date" name="end" placeholder="End" class="input input-bordered input-sm w-1/2 max-w-sm" />
                            </div>
                            <button type="submit" class="btn btn-success mt-4">Save</button>
                        </div>
                    </div>
                    
            </div>
        </div>
        <button class="btn btn-danger w-32"><i class="fa fa-download" aria-hidden="true"></i>
            <p class="text-sm">Resume</p>
        </button>
    </div>

</div>
<!-- About section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
    <div class="shadow-2xl rounded-md bg-white dark:bg-gray-900 px-6 py-8 sm:py-10 lg:py-12">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-bold mb-4 dark:text-white">About</h2>
            </div>
            @if($count != 0)
            <a href="{{ url('/profile/update-about/'.$loggedInUserData[0]->id) }}" class="text-blue-500 hover:text-blue-600">
                <i class="fas fa-pen"></i>
            </a>
            @else
            <a href="{{ url('/profile/add-about/'.$loggedInUserData[0]->id) }}" class="text-blue-500 hover:text-blue-600">
                <i class="fas fa-plus"></i>
            </a>
            @endif
        </div>

        @if($count != 0)
        <p>{{ $user_about[0]->about }}</p>
        @else
        <p>Hello there! 👋 Welcome to my profile.</p>
        @endif
    </div>
</div>
</div>
@endsection